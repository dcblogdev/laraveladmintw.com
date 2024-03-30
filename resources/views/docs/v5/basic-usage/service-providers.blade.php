<x-docs-v5-layout>
@section('title', 'Docs - Service Providers')
    <h1>Service Providers</h1>

    <h2>App Service Provider</h2>

    <p>The following are customizations from the default app service provider</p>

    <br>
    <h3>Default String Length</h3>
    <p>Set the database varchar data types to be 191 chars by default.</p>
    <pre><code class="language-php">
    @php echo htmlentities("
    Schema::defaultStringLength(191);
    ") @endphp
    </code></pre>

    <br>
    <h3>Force SSL</h3>
    <p>When the environment is not on local force SSL.</p>
    <pre><code class="language-php">
    @php echo htmlentities('
    if (config(\'app.env\') !== \'local\') {
        $url->forceScheme(\'https\');
    }
    ') @endphp
    </code></pre>

    <br>
    <h3>Cache settings</h3>
    <p>System settings are saved in a settings table to reduce database lookups they are cached, if the cache exists the settings will be read otherwise they are looked up from the database.</p>
    <p>If a setting matches a config name they the settings will override the config value.</p>
    <pre><code class="language-php">
    @php echo htmlentities('
    //if key exists
    if (Cache::has(\'setting_keys\')) {
        //decode keys to array
        $keys = json_decode(Cache::get(\'setting_keys\'), true);
        //loop over keys
        foreach ($keys as $key) {
            //override config setting
            config()->set([$key => Cache::get($key)]);
        }
    } else {
        if (!Cache::has(\'setting_keys\') && Schema::hasTable(\'settings\')) { //if cache key does not exist
            //get all rows
            $settings = Setting::all();

            $keys = [];

            //loop over rows
            foreach ($settings as $setting) {
                $key    = $setting->key;
                $value  = $setting->value;
                $keys[] = $key;

                //remember setting
                Cache::forever($key, $value);

                //override config setting
                config()->set([$key => $value]);
            }

            if (count($keys) > 0) {
                $keys = json_encode($keys);

                //create cache key remember forever
                Cache::forever(\'setting_keys\', $keys);
            }
        }
    }
    ') @endphp
    </code></pre>

</x-docs-v5-layout>
