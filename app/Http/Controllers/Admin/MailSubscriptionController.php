<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\MailSubscriptionRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\MailSubscriptionRequest;
use App\Models\MailSubscription;

class MailSubscriptionController extends Controller
{
    public function __construct(private MailSubscriptionRepositoryInterface $mailSubscriptionRepository)
    {
        $this->middleware('can:view-mail-subscriptions')->only(['index', 'show']);
        $this->middleware('can:delete-mail-subscriptions')->only(['destroy']);
    }

    public function index()
    {
        $mail_subscriptions = $this->mailSubscriptionRepository->getAll();

        return view('dashboard.pages.mail-subscription.index', compact('mail_subscriptions'));
    }

    public function store(MailSubscriptionRequest $request)
    {
        $this->mailSubscriptionRepository->create($request->validated());

        return to_route('admin.mail-subscriptions.index');
    }

    public function destroy(MailSubscription $mailSubscription)
    {
        try {
            $this->mailSubscriptionRepository->delete($mailSubscription);

            toast('تمت العمليه بنجاح', 'success');
        } catch (\Throwable $exception) {

            toast('حدث خطأ جرب لاحقا', 'error');
        }

        return to_route('admin.mail-subscriptions.index');
    }
}
