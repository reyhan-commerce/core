<?php

declare(strict_types=1);

namespace Reyhan\Core\Pipelines\Checkout;

use Reyhan\Core\Data\Checkout\CreateOrderResultData;
use Illuminate\Pipeline\Pipeline;

final class OrderCreationPipeline
{
    /**
     * The standard default pipes through which order creation requests pass.
     *
     * @var array<int, class-string>
     */
    protected static array $defaultPipes = [
        VerifyCartStatePipe::class,
        ApplyDynamicPromotionsPipe::class,
        CalculateTaxesAndShippingPipe::class,
        ReserveInventoryMutexPipe::class,
        ExecutePreOrderHooksPipe::class,
        PersistOrderRecordPipe::class,
        InitiatePaymentOrWalletPipe::class,
        FireOrderCreatedEventsPipe::class,
    ];

    /**
     * Active configured pipes.
     *
     * @var array<int, class-string>
     */
    protected static array $pipes = [
        VerifyCartStatePipe::class,
        ApplyDynamicPromotionsPipe::class,
        CalculateTaxesAndShippingPipe::class,
        ReserveInventoryMutexPipe::class,
        ExecutePreOrderHooksPipe::class,
        PersistOrderRecordPipe::class,
        InitiatePaymentOrWalletPipe::class,
        FireOrderCreatedEventsPipe::class,
    ];

    /**
     * Allow plugins and extensions to append custom pipes.
     *
     * @param  class-string  $pipe
     */
    public static function appendPipe(string $pipe): void
    {
        self::$pipes[] = $pipe;
    }

    /**
     * Allow plugins and extensions to prepend custom pipes.
     *
     * @param  class-string  $pipe
     */
    public static function prependPipe(string $pipe): void
    {
        array_unshift(self::$pipes, $pipe);
    }

    /**
     * Replace a core pipe with a customized userland pipe.
     *
     * @param  class-string  $target
     * @param  class-string  $replacement
     */
    public static function replacePipe(string $target, string $replacement): void
    {
        foreach (self::$pipes as $key => $pipe) {
            if ($pipe === $target) {
                self::$pipes[$key] = $replacement;
                return;
            }
        }
    }

    /**
     * Remove a core pipe from the active execution list.
     *
     * @param  class-string  $target
     */
    public static function removePipe(string $target): void
    {
        self::$pipes = array_values(array_filter(self::$pipes, fn (string $p): bool => $p !== $target));
    }

    /**
     * Set the entire pipes list.
     *
     * @param  array<int, class-string>  $pipes
     */
    public static function setPipes(array $pipes): void
    {
        self::$pipes = $pipes;
    }

    /**
     * Reset pipes back to framework defaults.
     */
    public static function resetPipes(): void
    {
        self::$pipes = self::$defaultPipes;
    }

    /**
     * Get configured pipes.
     *
     * @return array<int, class-string>
     */
    public static function getPipes(): array
    {
        return self::$pipes;
    }

    /**
     * Process the order creation context through the pipeline.
     */
    public function process(OrderCreationContext $context): CreateOrderResultData
    {
        return app(Pipeline::class)
            ->send($context)
            ->through(self::$pipes)
            ->then(fn (OrderCreationContext $ctx): CreateOrderResultData => $ctx->result);
    }
}
