@section('title', 'Reference')
<div>


    <x-2col>
        <x-slot name="left">
            <h3>Remaining characters</h3>
        </x-slot>
        <x-slot name="right">
            <div class="card">
                <x-tab name="preview">
                    <x-tabs.header>
                        <x-tabs.link name="preview">Preview</x-tabs.link>
                        <x-tabs.link name="code">Code</x-tabs.link>
                    </x-tabs.header>

                    <x-tabs.div name="preview">
                        <div x-data="{
                            content: 'Hello....',
                            limit: $el.dataset.limit,
                            get remaining() {
                                return this.limit - this.content.length
                            }
                        }" data-limit="160">
                            <x-form.textarea x-ref="content" x-model="content" maxlength="160"></x-form.textarea>
                             <p x-ref="remaining">
                                You have <span x-text="remaining"></span> characters remaining.
                            </p>
                        </div>
                    </x-tabs.div>

                    <x-tabs.div name="code">
                        <pre><code class="language-php">
                            &lt;div x-data=&quot;{
                                content: 'Hello....',
                                limit: $el.dataset.limit,
                                get remaining() {
                                    return this.limit - this.content.length
                                }
                            }&quot; data-limit=&quot;160&quot;&gt;
                                &lt;x-form.textarea x-ref=&quot;content&quot; x-model=&quot;content&quot; maxlength=&quot;160&quot;&gt;&lt;/x-form.textarea&gt;
                                 &lt;p x-ref=&quot;remaining&quot;&gt;
                                    You have &lt;span x-text=&quot;remaining&quot;&gt;&lt;/span&gt; characters remaining.
                                &lt;/p&gt;
                            &lt;/div&gt;
                        </code></pre>
                    </x-tabs.div>
                </x-tab>

            </div>
        </x-slot>
    </x-2col>

    <hr/>



    <x-2col>
        <x-slot name="left">
            <h3>Search Select</h3>
        </x-slot>
        <x-slot name="right">
            <div class="card">

                <x-tab name="preview">
                    <x-tabs.header>
                        <x-tabs.link name="preview">Preview</x-tabs.link>
                        <x-tabs.link name="code">Code</x-tabs.link>
                    </x-tabs.header>

                    <x-tabs.div name="preview">
                        <x-tab name="preview">
                            <x-form.select-search :data="$users" wire:model="userId" />
                        </x-tab>
                    </x-tabs.div>

                    <x-tabs.div name="code">
                        <pre><code class="language-php">
                            @php echo htmlentities('<x-form.select-search :data="$users" wire:model="userId" />'); @endphp
                        </code></pre>
                    </x-tabs.div>
                </x-tab>


            </div>
        </x-slot>
    </x-2col>
</div>