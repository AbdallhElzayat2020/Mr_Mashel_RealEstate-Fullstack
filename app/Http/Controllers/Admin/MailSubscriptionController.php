<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\MailSubscriptionRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\MailSubscriptionRequest;
use App\Models\MailSubscription;

class MailSubscriptionController extends Controller
{
    public function __construct(private MailSubscriptionRepositoryInterface $mailSubscriptionRepository) {}

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
        $this->mailSubscriptionRepository->delete($mailSubscription);

        return to_route('admin.mail-subscriptions.index');
    }
}
