<form action="{{ route('statuses.store') }}" method="post">
  @include('shared._errors')
  {{ csrf_field() }}
  <textarea name="content" id="" rows="3" placeholder="聊聊新鲜事。。。" class="form-control">{{ old('content') }}</textarea>
  <div class="text-right">
    <button class="btn btn-primary mt-3" type="submit">发布</button>
  </div>
</form>
