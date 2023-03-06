<x-docs-v2-layout>
@section('title', 'Docs - Audit Trails')
    <h1>Audit Trails</h1>

    <p>Log every user activity in audit trails, either by calling a model or using the add_user_log() helper. In the audit trails you can filter the audits by:</p>
    <ul>
        <li>User</li>
        <li>Section</li>
        <li>Type</li>
        <li>Date range</li>
    </ul>
    <p><img src="{{ url('images/audit-trails.png') }}" alt="Autid Trails"></p>

    <h2>Record activity</h2>

    <p>Record activity using the add_user_log helper</p>

    <p>Pass an array of data to populate the user log. This adds to the user activity table.</p>
    <p>The following keys are supported:</p>

    <ul>
        <li><b>Title</b> $data['title'] sets the activity title</li>
        <li><b>Link</b> $data['link'] a URL link</li>
        <li><b>Reference identifier</b> $data['id'] set a reference normally a model's primary key</li>
        <li><b>Section</b> $data['section'] identifty the section ie Users, Posts</li>
        <li><b>Type</b> $data['type'] sets the type of activity ie Create, Update, Delete</li>
    </ul>

    <pre><code class="language-php">
    @php echo htmlentities('
    add_user_log([
        \'title\'        => "Searched: ".$this->query,
        \'link\'         => route(\'admin.settings\'),
        \'reference_id\' => auth()->id(),
        \'section\'      => \'Search\',
        \'type\'         => \'Search\'
    ]);
    ') @endphp
    </code></pre>

</x-docs-v2-layout>
