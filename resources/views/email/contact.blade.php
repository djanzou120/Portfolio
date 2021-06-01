<div>
    <p>Nom : {{ $contact->name ?? null }}</p>
    <p>Email : {{ $contact->email ?? null }}</p>
    <p>Contact : {{ $contact->phone ?? null }}</p>
    <p>Message : {{ $contact->message ?? null }}</p>
</div>
