<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Repositories\ContactRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function __construct(private ContactRepositoryInterface $contactRepository)
    {
        //
    }

    public function index()
    {
        $contacts = $this->contactRepository->getAll();

        return view('dashboard.pages.contact.index', compact('contacts'));
        //        return view('dashboard.pages.contact.index', [
        //            'contacts' => Contact::all()
        //        ]);
    }

    public function create()
    {
        return view('dashboard.pages.contact.create');
    }

    public function store(ContactRequest $request)
    {
        $this->contactRepository->create($request->validated());

        return to_route('admin.contacts.index');
    }

    public function show(Contact $contact)
    {
        return view('dashboard.pages.contact.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('dashboard.pages.contact.edit', compact('contact'));
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $this->contactRepository->update($contact, $request->validated());

        return to_route('admin.contacts.index');
    }

    public function destroy(Contact $contact)
    {
        $this->contactRepository->delete($contact);

        return to_route('admin.contacts.index');
    }
}
