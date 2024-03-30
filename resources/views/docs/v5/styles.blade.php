<x-docs-v5-layout>
@section('title', 'Docs - Styles')
    <h1>Styles</h1>

    <p>
        <a href="#basestyles">Base Styles</a><br>
        <a href="#primaryColors">Primary Colors</a><br>
        <a href="#error">Error</a><br>
        <a href="#input">Input</a><br>
        <a href="#alerts">Alerts</a><br>
        <a href="#buttons">Buttons</a><br>
    </p>

    <p>All styles are powered by TailwindCss, having said that you may want to reuse style in easy ways. There are generally 2 options. Create a blade component or apply a CSS style.</p>

    <p>AdminTW provides a series or reusable CSS classes made up from TailwindCSS classes.</p>

    <h2><a name="basestyles">Base Styles</a></h2>

    <p>These are base styles that do not use classes.</p>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">

            <h1>H1</h1>
            <h2>H2</h2>
            <h3>H3</h3>
            <h4>H4</h4>
            <p>Paragraph</p>
            <p><a href="#">Link</a></p>
            <hr>

            <table>
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Users</td>
                        <td>Manage user accounts</td>
                        <td><a href="#">Edit</a></td>
                    </tr>
                </tbody>
            </table>

        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                    <h1>H1</h1>
                    <h2>H2</h2>
                    <h3>H3</h3>
                    <h4>H4</h4>
                    <p>Paragraph</p>
                    <p><a href="#">Link</a></p>
                    <hr>

                    <table>
                        <thead>
                            <tr>
                                <th>Section</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Users</td>
                                <td>Manage user accounts</td>
                                <td><a href="#">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

    <h2><a name="primaryColors">Primary Colors</a></h2>
    <p>AdminTW comes with a primary background and text colour of <span class="text-primary">#5A67D8</span> </p>
    <p>To change this edit <code class="language-php">tailwind.config.js</code> </p>

    <pre><code class="language-php">
    @php echo htmlentities("
    theme: {
        extend: {
            colors: {
              primary: '#5A67D8',
            },
            textColors: {
              primary: '#5A67D8'
            },
        },
    },
    ") @endphp
    </code></pre>

    <h2><a name="error">Error</a></h2>
    <p>.error use error class to apply red text.</p>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">
            <p class="error">Paragraph</p>
        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                    <p class="error">Paragraph</p>
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

    <h2><a name="input">.input</a></h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">
            <input class="input">
        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                    <input class="input">
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

    <h2><a name="alerts">Alerts</a></h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">
            <div class="alert alert-primary">Primary</div>
            <div class="alert alert-gray">Gray</div>
            <div class="alert alert-red">Red</div>
            <div class="alert alert-yellow">Yellow</div>
            <div class="alert alert-green">Green</div>
            <div class="alert alert-blue">Blue</div>
            <div class="alert alert-indigo">Indigo</div>
            <div class="alert alert-purple">Purple</div>
            <div class="alert alert-pink">Pink</div>
        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                <div class="alert alert-primary">Primary</div>
                <div class="alert alert-gray">Gray</div>
                <div class="alert alert-red">Red</div>
                <div class="alert alert-yellow">Yellow</div>
                <div class="alert alert-green">Green</div>
                <div class="alert alert-blue">Blue</div>
                <div class="alert alert-indigo">Indigo</div>
                <div class="alert alert-purple">Purple</div>
                <div class="alert alert-pink">Pink</div>');
                @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

    <h2><a name="buttons">Buttons</a></h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">
            <a href="#">Styled link</a>
            <button class="btn btn-primary">Primary</button>
            <button class="btn btn-gray">Gray</button>
            <button class="btn btn-red">Red</button>
            <button class="btn btn-yellow">Yellow</button>
            <button class="btn btn-green">Green</button>
            <button class="btn btn-blue">Blue</button>
            <button class="btn btn-indigo">Indigo</button>
            <button class="btn btn-purple">Purple</button>
            <button class="btn btn-pink">Pink</button>
        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('<a href="#">Styled link</a>
                <button class="btn btn-primary">Primary</button>
                <button class="btn btn-gray">Gray</button>
                <button class="btn btn-red">Red</button>
                <button class="btn btn-yellow">Yellow</button>
                <button class="btn btn-green">Green</button>
                <button class="btn btn-blue">Blue</button>
                <button class="btn btn-indigo">Indigo</button>
                <button class="btn btn-purple">Purple</button>
                <button class="btn btn-pink">Pink</button>');
                @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

    <div class="alert alert-primary">
        <p class="text-white">To change the classes edit the files at:<br>
        <b>resources/sass/app.scss</b><br>
        <b>resources/sass/form.scss</b><br>
        <b>resources/sass/typography.scss</b><br>
        <b>resources/sass/utility.scss</b><br>
        <b>resources/sass/components/alert.scss</b><br>
        <b>resources/sass/components/button.scss</b><br>
        <b>resources/sass/components/card.scss</b><br>
            <b>resources/sass/components/link.scss</b></p>
        <p class="text-white">Make sure you run <code class="language-php">@php echo htmlentities('npm run dev')@endphp</code> to rebuild the CSS file after making any changes.</p>
    </div>

</x-docs-v5-layout>
