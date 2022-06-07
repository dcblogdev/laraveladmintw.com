<x-doc-layout>
@section('title', 'Docs - Notifications')
    <h1>Notifications</h1>

    <p>Notications by default will be empty, when clicking on the notications icon:</p>
    <p><img src="{{ url('images/docs/nofications-icon.png') }}" alt="Notifications Icon"></p>

    <p>The notifications display as:</p>
    <p><img src="{{ url('images/docs/notifications-default.png') }}" alt="Notifications default state"></p>

    <p>The livewire class loads the latests 20 notifications for the logged in user.</p>

<pre><code class="language-php">
 @php echo htmlentities('
<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use App\Models\Notification;
use Illuminate\Contracts\View\View;

use function auth;
use function now;
use function view;

class NotificationsMenu extends Base
{
    public $notifications;
    public $unseenCount = 0;

    public function mount(): void
    {
        parent::mount();

        $this->notifications = Notification::where(\'assigned_to_user_id\', auth()->id())->take(20)->get();
        $this->unseenCount   = Notification::where(\'assigned_to_user_id\', auth()->id())->where(\'viewed\', 0)->count();
    }

    public function render(): View
    {
        return view(\'livewire.admin.notifications-menu\');
    }

    public function open(): void
    {
        Notification::where(\'assigned_to_user_id\', auth()->id())->where(\'viewed\', 0)->update([
            \'viewed\'    => 1,
            \'viewed_at\' => now()
        ]);
    }
}

') @endphp
</code></pre>

<p>If any are unread the number of unread notifcations will be displayed with the icon. When the notifications window is open the notifications are marked as read.</p>

<p><img src="{{ url('images/docs/notification-count.png') }}" alt="Notifications Icon"></p>

<pre><code class="language-php">
@php echo htmlentities('
@if ($unseenCount > 0)
    <span class="absolute top-0 block w-4 h-4 text-xs text-white bg-red-500 rounded-full left-4 ring-2 ring-white" aria-hidden="true">{{ $unseenCount }}</span>
@endif
') @endphp
</code></pre>

<p>When no notications exist, a "No notifications yet" message is displayed. Otherwise the notifications are looped over and displayed.</p>

<pre><code class="language-php">
@php echo htmlentities('
@if (count($notifications) === 0)
    <li class="p-6">No notifications yet.</li>
@else
    @foreach($notifications as $notification)
    <li class="relative px-6 py-5">
        <div class="flex items-center justify-between group">
            @if (!empty($notification->link))
                <a href="{{ $notification->link }}" class="block p-1 -m-1">
            @endif

                <div class="absolute inset-0 group-hover:bg-gray-50 dark:group-hover:bg-gray-500" aria-hidden="true"></div>

                <div class="relative flex items-center flex-1 min-w-0">

                    <span class="relative flex-shrink-0 inline-block">
                        @if (!empty($notification->assignedFrom->image))
                            <img class="w-10 h-10 rounded-full" src="{{ storage_url($notification->assignedFrom->image) }}" alt="{{ $notification->assignedFrom->name }}">
                        @endif
                    </span>

                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-900 dark:text-gray-200">{{ $notification->title }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-200">{{ $notification->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            @if (!empty($notification->link))
                </a>
            @endif
        </div>
    </li>
    @endforeach
@endif
') @endphp
</code></pre>

<h2>Creating Notifications</h2>

<p>To create a notification create a database entry via the Notification model:</p>

<pre><code class="language-php">
@php echo htmlentities('
App\Models\Notification::create([
    \'title\'                 => \'Joe Called\',
    \'assigned_to_user_id\'   => $user->id,
    \'assigned_from_user_id\' => auth()->id(),
    \'link\'                  => route(\'admin.contacts\')
]);
') @endphp
</code></pre>

<p>The notifications will be clickable if a URL has been provided.</p>

<p><img src="{{ url('images/docs/notification-sample.png') }}" alt="Notifications example"></p>











</x-doc-layout>
