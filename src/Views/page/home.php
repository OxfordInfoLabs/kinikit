<h2>Welcome to the Home Controller</h2>
<p>This is a minimal starter application ready for your development.</p>

<p>Below are some results from an example database query using the ORM:</p>

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
        <td>{{submittedString}}</td>
    </tr>
    {{/examples}}
    </tbody>
</table>