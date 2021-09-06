<div class="text-center">
    @if($toggle)
    <h2>{{ $title }}</h2>
    @endif

    <livewire:example.day8-child/>

    <div class="mt-5">
      <button class="ui button" wire:click="$emit('toggleTitle')">顯示／隱藏</button>
    </div>

    <div class="mt-8">
      <p>觸發瀏覽器的監聽事件</p>
      <button class="ui button" wire:click="postAdd">文章發布</button>
    </div>
    
</div>

@section('scripts')
<script>
  Livewire.on('toggleTitle', () => {
      alert('顯示或是藏起來！')
  })
</script>
@endsection

<script>
window.addEventListener('postAdded', () => {
  alert('文章已經發布囉！')
})
</script>