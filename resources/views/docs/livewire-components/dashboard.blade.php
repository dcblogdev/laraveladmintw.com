<x-doc-layout>
@section('title', 'Docs - Dashboard')
    <h1>Dashboard</h1>

    <p>The dashboard is a simple Livewire class and view, its simple as you'll want to add your own changes on a per project basis.</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    <?php
    namespace App\Http\Livewire\Admin;

    use App\Http\Livewire\Base;
    use Illuminate\Contracts\View\View;

    use function abort_if_cannot;
    use function view;

    class Dashboard extends Base
    {
        public function render(): View
        {
            abort_if_cannot(\'view_dashboard\');

            return view(\'livewire.admin.dashboard\');
        }
    }
    ') @endphp
    </code></pre>

    <p>The view sets the page and browser title and contains a box for an introduction.</p>

    <pre><code class="language-php">
    @php echo htmlentities('
    @section(\'title\', \'Dashboard\')

    <h1>Dashboard</h1>

    <div class="card">
        <p><b>Laravel AdminTW</b> is a free theme</p>
        <p>AdminTW is minimal theme presenting a clean sidebar and top bar and open areas for content to be displayed.</p>
        <p>AdminTW supports both light and dark mode based on the users OS.</p>
        <p>Provided are blade and Laravel Livewire components for common layout / UI elements and a complete test suite (Pest PHP).</p>
        <p>Read the <a href="https://laraveladmintw.com/docs">Documentation</a></p>
    </div>
    ') @endphp
    </code></pre>





</x-doc-layout>
