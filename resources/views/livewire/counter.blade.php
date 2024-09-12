<div style="text-align: center">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <button wire:click="increment">+</button>
    {{-- wire:click=“メソッド名”で実行  --}}
    <h1>{{ $count }}</h1>
   {{-- Counterクラス内プロパティを表示 --}}
   <div class="mb-8">
    こんにちは、{{ $name }}さん<br>
    <input type="text" wire:models="name">
    {{-- <input type="text" wire:model.debounce.2000ms="name"> --}}
    {{-- <input type="text" wire:model.lazy="name"> --}}
    {{-- <input type="text" wire:model.defer="name"> --}}
    <br>
    <button wire:mouseover="mouseOver">マウスを合わせてね</button>
   </div>
</div>
