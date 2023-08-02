<div>
    <livewire:panel-heading />
    <div class="container mx-auto h-screen grid grid-cols-3 px-4 py-6">
        <div>
            <livewire:column-heading title="Todo" />
            @foreach ($todo as $t)
            <livewire:card :task="$t" />
            @endforeach
        </div>
        <div>
            <livewire:column-heading title="On Going" />
            @foreach ($progress as $p)
            <livewire:card :task="$p" />
            @endforeach
        </div>
        <div>
            <livewire:column-heading title="Done" />
            @foreach ($done as $d)
            <livewire:card :task="$d" />
            @endforeach
        </div>
    </div>
</div>