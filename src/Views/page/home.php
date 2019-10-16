<h2>Welcome to Kinikit</h2>

<p>This is a brand new application ready for development.</p>

<h3>Database driven comments:</h3>

<table class="table striped">
    <thead>
    <tr>
        <th>Comment</th>
        <th>Submitted</th>
    </tr>
    </thead>

    <tbody>
        {{#examples}}
            <tr>
                <td>{{comment}}</td>
                <td>{{submitted}}</td>
            </tr>
        {{/examples}}
    </tbody>
</table>