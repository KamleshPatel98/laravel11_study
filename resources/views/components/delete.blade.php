<div>
    <form action="{{ $deleteLink }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?');"><i class="fa-regular fa-trash-can"></i></button>
    </form>
</div>