<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Departure Airport</th>
            <th>Arrival Airport</th>
            <th>Plane</th>
        </tr>
    </thead>
    <tbody>
        {flights}
            <tr>
                <td>{id}</td>
                <td>{departureTime}</td>
                <td>{arrivalTime}</td>
                <td>{departureAirport}</td>
                <td>{arrivalAirport}</td>
                <td>{plane}</td>
            </tr>
        {/flights}
    </tbody>
</table>