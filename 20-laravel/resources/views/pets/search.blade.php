@forelse ($pets as $pet)
    <tr>
        <td>{{ $pet->id }}</td>
        <td><img src="{{ asset('images/' . $pet->image) }}" width="60"></td>
        <td>{{ $pet->name }}</td>
        <td>{{ $pet->breed }}</td>
        <td>{{ $pet->kind }}</td>
        <td>{{ $pet->age }}</td>
        <td>{{ $pet->location }}</td>
    </tr>
@empty
    <tr>
        <td colspan="7" class="text-center">No results found</td>
    </tr>
@endforelse
