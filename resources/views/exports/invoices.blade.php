<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
            <td>{{ $invoice->deligate_name }}</td>
            <td>{{ $invoice->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
