<div>
    <livewire:panel-heading />
    <div class="container mx-auto h-screen grid grid-cols-3 px-4 py-6">
        <livewire:column title="Todo" :tasks="$todo" />
        <livewire:column title="Progress" :tasks="$progress" />
        <livewire:column title="Done" :tasks="$done" />
    </div>
</div>