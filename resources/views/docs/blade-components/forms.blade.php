<x-doc-layout>
@section('title', 'Docs - Forms')
    <h1>Form Components</h1>

    <p>
        <a href="#form">Form</a><br>
        <a href="#input">Input</a><br>
        <a href="#textarea">Textarea</a><br>
        <a href="#checkbox">Checkbox</a><br>
        <a href="#radio">Radio</a><br>
        <a href="#select">Select</a><br>
        <a href="#button">Button</a>
    </p>

    <p>All form components accept option parameters that such as class='' style=''</p>

    <p>When the method is set to PUT, PATCH or DELETE the method() will be applied automatically.</p>

    <h2><a id="form">Form</a></h2>
    <p>Defaults to post method and CSRF token</p>

    <pre><code class="language-php">@php echo htmlentities('
    <x-form>

    </x-form>
    ')@endphp</code></pre>

    <p>The method and actions can be passed:</p>

    <pre><code class="language-php">@php echo htmlentities('
    <x-form method=\'delete\' action=\'delete-comment\'>

    </x-form>
    ')@endphp</code></pre>

    <h2><a id="input">Form input</a></h2>

    <p>Create an input with a name, the name will be used as the label as long as the label is not provided.</p>

    <pre><code class="language-php">@php echo htmlentities('
        <x-form.input name=\'username\' />
    ')@endphp</code></pre>

    <p>Outputs:</p>

    <pre><code class="language-php">@php echo htmlentities('
    <div>
        <label for=\'username\'>Username</label>
        <input type=\'text\' name=\'username\' id=\'username\' value=\'\' />
    </div>
    ')@endphp</code></pre>

    <p>Use a label</p>
    <pre><code class="language-php">@php echo htmlentities('
        <x-form.input name=\'username\' label=\'Username\' />
    ')@endphp</code></pre>

    <p>Use an id and a class</p>
    <pre><code class="language-php">@php echo htmlentities('
        <x-form.input name=\'username\' label=\'Username\' id=\'username\' class=\'form-input\' />
    ')@endphp</code></pre>

    <p>The type is set to text by default, it can be changed</p>
    <pre><code class="language-php">@php echo htmlentities('
        <x-form.input name=\'password\' type=\'password\' />
    ')@endphp</code></pre>

    <p>Set the input value</p>
    <pre><code class="language-php">@php echo htmlentities('
        <x-form.input name=\'username\' label=\'Username\'>{{ $username }}</x-form.input>
    ')@endphp</code></pre>


    <h2><a id="textarea">Form textarea</a></h2>

    <pre><code class="language-php">@php echo htmlentities('
        <x-form.textarea name=\'comments\'></x-form.textarea>
    ')@endphp</code></pre>

    <p>Set the rows and columns</p>

    <pre><code class="language-php">@php echo htmlentities('
        <x-form.textarea name=\'comments\' cols=\'10\' rows=\'10\'></x-form.textarea>
    ')@endphp</code></pre>

    <p>Set the textarea data</p>
    <pre><code class="language-php">@php echo htmlentities('
        <x-form.textarea name=\'comments\' cols=\'10\' rows=\'10\'>{{ $comments }}</x-form.textarea>
    ')@endphp</code></pre>


    <h2><a id="checkbox">Form Checkbox</a></h2>

    <p>A checkbox can also be defined, set the name and value</p>
    <pre><code class="language-php">@php echo htmlentities('
        <x-form.checkbox name=\'terms\' value=\'1\'></x-form.checkbox>
    ')@endphp</code></pre>

    <p>Check the checkbox by passing its value, as long its a match the checkbox will be checked.</p>
    <pre><code class="language-php">@php echo htmlentities('
        <x-form.checkbox name=\'terms\' value=\'1\'>1</x-form.checkbox>
    ')@endphp</code></pre>

    <p>Or</p>

    <pre><code class="language-php">@php echo htmlentities('
        <x-form.checkbox name=\'terms\' value=\'1\'>{{ $terms }}</x-form.checkbox>
    ')@endphp</code></pre>


    <h2><a id="radio">Form Radio</a></h2>

    <p>A radio can also be defined, set the name, label and value</p>

    <pre><code class="language-php">@php echo htmlentities('
        <x-form.radio name=\'result\' label=\'Won\' value=\'Won\'/>
        <x-form.radio name=\'result\' label=\'Lost\' value=\'Lost\'/>
        <x-form.radio name=\'result\' label=\'Draw\' value=\'Draw\'/>
    ')@endphp</code></pre>

    <p>Pass a value which will check the matching radio.</p>

    <pre><code class="language-php">@php echo htmlentities('
        <x-form.radio name=\'result\' label=\'Won\' value=\'{{ $result }}\'/>
        <x-form.radio name=\'result\' label=\'Lost\' value=\'{{ $result }}\'/>
        <x-form.radio name=\'result\' label=\'Draw\' value=\'{{ $result }}\'/>
    ')@endphp</code></pre>

    <p>Check the checkbox by passing its value, as long it's a match the checkbox will be checked.</p>

    <pre><code class="language-php">@php echo htmlentities('
        <x-form.checkbox name=\'terms\' value=\'1\'>1</x-form.checkbox>
    ')@endphp</code></pre>

    <p>Or</p>

    <pre><code class="language-php">@php echo htmlentities('
        <x-form.checkbox name=\'terms\' value=\'1\'>{{ $terms }}</x-form.checkbox>
    ')@endphp</code></pre>

    <h2><a id="select">Form select</a></h2>

    <p>create a select menu set the name and placeholder for the initial option</p>
    <pre><code class="language-php">@php echo htmlentities('
        <x-form.select name=\'types\' placeholder=\'Select\'>

        </x-form.select>
    ')@endphp</code></pre>

    <p>Leave off the placeholder to have only the select and options that can be selected</p>
    <pre><code class="language-php">@php echo htmlentities('
        <x-form.select name=\'types\'>

        </x-form.select>
    ')@endphp</code></pre>

    <p>In order to set the option an array is needed and is looped over and then a nested component is used.</p>

    <p>Pass in the key and value from the array</p>
    <pre><code class="language-php">@php echo htmlentities('
        <x-form.select name=\'types\'>

            <?php $options = [1 => \'one\', 2 => \'two\', 3 => \'three\']; ?>

            <x-form.select name=\'types\' placeholder=\'Select\'>
                @foreach($options as $key => $value)
                    <x-form.select-option key=\'{{ $key }}\' value=\'{{ $value }}\' />
                @endforeach
            </x-form.select>

        </x-form.select>
    ')@endphp</code></pre>


    <h2><a id="button">Form button</a></h2>

    <p>Create a button, defaults to a submit type</p>

    <pre><code class="language-php">@php echo htmlentities('
        <x-form.button name=\'submit\'>Submit</x-form.button>
    ')@endphp</code></pre>

    <p>Create a button, using only the defaults and a label</p>

    <pre><code class="language-php">@php echo htmlentities('
        <x-form.button>Submit</x-form.button>
    ')@endphp</code></pre>

    <div class="alert alert-primary">
        <p class="text-white">To change the classes edit the blade component at:<br>
        <b>resources/views/components/form.blade.php</b><br>
        <b>resources/views/components/form/checkbox.blade.php</b><br>
        <b>resources/views/components/form/checkbox-row.blade.php</b><br>
        <b>resources/views/components/form/ckeditor.blade.php</b><br>
        <b>resources/views/components/form/date.blade.php</b><br>
        <b>resources/views/components/form/daterange.blade.php</b><br>
        <b>resources/views/components/form/datetime.blade.php</b><br>
        <b>resources/views/components/form/file-upload.blade.php</b><br>
        <b>resources/views/components/form/group.blade.php</b><br>
        <b>resources/views/components/form/input.blade.php</b><br>
        <b>resources/views/components/form/radio.blade.php</b><br>
        <b>resources/views/components/form/select.blade.php</b><br>
        <b>resources/views/components/form/select-option.blade.php</b><br>
        <b>resources/views/components/form/select-option-row.blade.php</b><br>
        <b>resources/views/components/form/select-search.blade.php</b><br>
        <b>resources/views/components/form/submit.blade.php</b><br>
        <b>resources/views/components/form/textarea.blade.php</b><br>
        <b>resources/views/components/form/time.blade.php</b><br>
        <b>resources/views/components/form/timeday.blade.php</b><br>
    </div>

    <h2>Example:</h2>

    <x-tab name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">

            <x-form method="get">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>

                        <x-form.input name="name">{{ old('name', 'Dave') }}</x-form.input>

                        <x-form.select name="gender">
                            <x-form.select-option value="">Select</x-form.select-option>
                            <x-form.select-option value="male" selected="male">Male</x-form.select-option>
                            <x-form.select-option value="female">Female</x-form.select-option>
                        </x-form.select>

                        <x-form.checkbox name="checkbox" label="Agree to terms" checked="true" />

                    </div>

                    <div>

                        <x-form.input name="image" type="file"></x-form.input>

                        <x-form.group label="T-shirt Size">
                            <x-form.radio name="size" id="s1" label="Small" value="sm"></x-form.radio>
                            <x-form.radio name="size" id="s2" label="Medium" value="md"></x-form.radio>
                            <x-form.radio name="size" id="s3" label="Large" value="lg"></x-form.radio>
                            <x-form.radio name="size" id="s4" label="XL" value="xl"></x-form.radio>
                            <x-form.radio name="size" id="s5" label="XXL" value="xxl"></x-form.radio>
                        </x-form.group>

                    </div>
                </div>

                <hr/>

                <h3>Date and Time pickers</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div>
                        <x-form.date name="date" label="Date"></x-form.date>
                        <x-form.daterange name="daterange" label="Date Range"></x-form.daterange>
                        <x-form.datetime name="datetime" label="Date Time"></x-form.datetime>
                    </div>

                    <div>
                        <x-form.time name="time" label="Time"></x-form.time>
                        <x-form.timeday name="timeday" label="Time Day between 08:00 and 18:00 "></x-form.timeday>
                    </div>

                </div>

                <hr/>

                <x-form.textarea name="comments"></x-form.textarea>

                <x-form.submit>Submit</x-form.submit>

            </x-form>

        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-php">
                @php echo htmlentities('
                    <x-form method="get">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>

                                <x-form.input name="name">{{ old(\'name\', \'Dave\') }}</x-form.input>

                                <x-form.select name="gender">
                                    <x-form.select-option value="">Select</x-form.select-option>
                                    <x-form.select-option value="male" selected="male">Male</x-form.select-option>
                                    <x-form.select-option value="female">Female</x-form.select-option>
                                </x-form.select>

                                <x-form.checkbox name="checkbox" label="Agree to terms" checked="true" />

                            </div>

                            <div>

                                <x-form.input name="image" type="file"></x-form.input>

                                <x-form.group label="T-shirt Size">
                                    <x-form.radio name="size" id="s1" label="Small" value="sm"></x-form.radio>
                                    <x-form.radio name="size" id="s2" label="Medium" value="md"></x-form.radio>
                                    <x-form.radio name="size" id="s3" label="Large" value="lg"></x-form.radio>
                                    <x-form.radio name="size" id="s4" label="XL" value="xl"></x-form.radio>
                                    <x-form.radio name="size" id="s5" label="XXL" value="xxl"></x-form.radio>
                                </x-form.group>

                            </div>
                        </div>

                        <hr/>

                        <h3>Date and Time pickers</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div>
                                <x-form.date name="date" label="Date"></x-form.date>
                                <x-form.daterange name="daterange" label="Date Range"></x-form.daterange>
                                <x-form.datetime name="datetime" label="Date Time"></x-form.datetime>
                            </div>

                            <div>
                                <x-form.time name="time" label="Time"></x-form.time>
                                <x-form.timeday name="timeday" label="Time Day between 08:00 and 18:00 "></x-form.timeday>
                            </div>

                        </div>

                        <hr/>

                        <x-form.textarea name="comments"></x-form.textarea>

                        <x-form.submit>Submit</x-form.submit>

                    </x-form>
                ') @endphp
            </code></pre>
        </x-tabs.div>
    </x-tab>

</x-doc-layout>
