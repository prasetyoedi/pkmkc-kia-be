@extends('layout.index')

@section('title', 'PKM KIA - Home')
@section('content')


<div class="container mt-5">
    <h2 class="mb-4">Responsive Table</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>(555) 555-5555</td>
                    <td>123 Main St, Anytown, USA</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane.smith@example.com</td>
                    <td>(555) 555-5556</td>
                    <td>456 Maple St, Anytown, USA</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bob Johnson</td>
                    <td>bob.johnson@example.com</td>
                    <td>(555) 555-5557</td>
                    <td>789 Oak St, Anytown, USA</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Alice Brown</td>
                    <td>alice.brown@example.com</td>
                    <td>(555) 555-5558</td>
                    <td>101 Pine St, Anytown, USA</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Charlie Davis</td>
                    <td>charlie.davis@example.com</td>
                    <td>(555) 555-5559</td>
                    <td>202 Cedar St, Anytown, USA</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection