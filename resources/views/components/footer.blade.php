<footer class="mt-10 border-t bg-white px-6 py-4 text-sm text-gray-600">
  <div class="mx-auto flex max-w-7xl items-center justify-between">
    <div>
      <strong><a href="{{url('/')}}">{{  config('app.name') }}</a></strong>
    </div>
    <div>© {{ now()->year }}</div>
  </div>
</footer>
