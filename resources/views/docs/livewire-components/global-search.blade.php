<x-doc-layout>
@section('title', 'Docs - Global Search')
<h1>Global Search</h1>

<p>AdminTW comes with a search component that's pre-configured to search users. The search component can be configured to use any model.</p>

<p><img src="{{ url('images/docs/global-search.png') }}" alt="Global Search"></p>

<p>The search class:</p>

<pre><code class="language-php">
@php echo htmlentities('
<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use App\Models\User;
use Illuminate\Contracts\View\View;

use function add_user_log;
use function view;

class Search extends Base
{
    public string $query         = \'\';
    public array  $models        = [
        User::class
    ];
    public array  $searchResults = [];

    public function render(): View
    {
        $this->searchResults = [];

        if (strlen($this->query) > 2) {
            foreach ($this->models as $model) {
                $query   = new $model();
                $fields  = $query->getModel()->searchable;
                $fields  = implode(\',\', $fields);
                $search  = str_replace(\'@\', \'\', $this->query);
                $results = $query->selectRaw(\'*, MATCH (\'.$fields.\') AGAINST (? IN BOOLEAN MODE)\', [\'*\'.$search.\'*\'])
                    ->whereRaw(\'MATCH (\'.$fields.\') AGAINST (? IN BOOLEAN MODE)\', [\'*\'.$search.\'*\'])
                    ->take(10)
                    ->get();

                foreach ($results as $result) {
                    $this->searchResults[] = [
                        \'label\'   => $result[$query->getModel()->label],
                        \'route\'   => $query->getModel()->route($result->id),
                        \'section\' => $result->section
                    ];
                }
            }

            add_user_log([
                \'title\'        => "Searched: ".$this->query,
                \'link\'         => route(\'admin.settings\'),
                \'reference_id\' => auth()->id(),
                \'section\'      => \'Search\',
                \'type\'         => \'Search\'
            ]);
        }

        return view(\'livewire.admin.search\');
    }
}
') @endphp
</code></pre>

<p>The change what models can be searched add the model class into this array:</p>
<pre><code class="language-php">
 @php echo htmlentities('
public array $models = [
    User::class
];
') @endphp
</code></pre>

<p>For models to be searchable they require:</p>
<ul>
    <li><b>Label</b> - the column to display the name or label ie for users name is used to represet the users name.</li>
    <li><b>Section</b> - A user friendly name of the area being searched. Users to identify the section being search ie Users, Posts</li>
    <li><b>Searchable</b> - An array of searchable columns set each column of the model that should be searched.</li>
    <li><b>Route</b> - A route method that links to a view/edit page for when the search item is clicked.</li>
</ul>

<pre><code class="language-php">
 @php echo htmlentities('
public string $label      = \'name\';
public string $section    = \'Users\';
public array  $searchable = [\'name\', \'email\'];

public function route($id): string
{
    return route(\'admin.users.show\', [\'user\' => $id]);
}
') @endphp
</code></pre>







</x-doc-layout>
