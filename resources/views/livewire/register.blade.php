<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <form wire:submit.prevent="register">
        <label for="name">名前</label>
        <input id="name" type="text" wire:model="name">
        @error('name')<div class="text-red-400">{{ $message }}</div>@enderror

        <label for="email">メールアドレス</label>
        <input id="email" type="email" wire:model.lazy="email">
        @error('email')<div class="text-red-400">{{ $message }}</div>@enderror

        <label for="password">パスワード</label>
        <input id="password" type="password" wire:model="password">
        @error('password')<div class="text-red-400">{{ $message }}</div>@enderror

        <button>登録する</button>
    </form>
</div>
