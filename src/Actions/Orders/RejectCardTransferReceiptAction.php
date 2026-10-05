<?php

declare(strict_types=1);

namespace Reyhan\Core\Actions\Orders;

use Illuminate\Support\Facades\DB;
use Reyhan\Core\Models\CardTransferReceipt;
use Reyhan\Core\Models\Order;

final class RejectCardTransferReceiptAction
{
    /**
     * Reject offline card transfer receipt with reason.
     */
    public function execute(Order $order, CardTransferReceipt $receipt, ?int $adminId = null, ?string $adminNotes = null): void
    {
        DB::transaction(function () use ($receipt, $adminId, $adminNotes): void {
            $receipt->update([
                'status' => 'rejected',
                'reviewed_by' => $adminId ?? auth()->id(),
                'reviewed_at' => now(),
                'admin_notes' => $adminNotes,
            ]);
        });
    }
}
