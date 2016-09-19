@include('pages.header')

<div class="col-md-12">
  <!-- sidebar -->
  <div class="col-md-3">
    <br><br><br><br>
    <div class="list-group">
      <button type="button" class="list-group-item">Show all</button>
      <button type="button" class="list-group-item">Search by Tag</button>
      <button type="button" class="list-group-item">Search by Title</button>
    </div>
  </div>

  <!-- form to create new link -->
  <div class="col-md-5">
    <h2>Add New Link</h2>
    <hr>
    <form method="POST" action="/save_links/store">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="urlInput">URL</label>
        <input type="text" name="url" class="form-control" id="urlInput" placeholder="link to save">
      </div>

      <div class="form-group">
        <label for="titleInput">Title</label>
        <input type="text" name="title" class="form-control" id="titleInput" placeholder="title">
      </div>

      <div class="form-group">
        <label for="descInput">Description</label>
        <input type="text" name="description" class="form-control" id="descInput" placeholder="description">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

  <!-- show a list of all links -->
  <div class="col-md-4">
    <h2>All Links</h2>
    <hr>
    <ul>
    @foreach($links as $link)
        <li title="{{ $link->description }}"><a href="{{ $link->url }}">{{ $link->title }}</a> </li>
    @endforeach
    </ul>
  </div>

</div>
