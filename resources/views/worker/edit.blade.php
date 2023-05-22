@extends('layout.main')

@section('content')

  <div>
    <hr>
    <div>
      <form action="{{ route('worker.update', $worker->id) }}" method="Post">
        @csrf
        @method('Patch')
        <div style="margin-bottom: 15px;"><input type="text" name="name" placeholder="name" value="{{ old('name') ?? $worker->name }}">
          @error('name')
          {{ $message }}
          @enderror
        </div>
        <div style="margin-bottom: 15px;"><input type="text" name="surname" placeholder="surname" value="{{ old('surname') ?? $worker->surname }}">
          @error('surname')
          {{ $message }}
          @enderror
        </div>
        <div style="margin-bottom: 15px;"><input type="email" name="email" placeholder="email" value="{{ old('email') ?? $worker->email }}">
          @error('email')
          {{ $message }}
          @enderror
        </div>
        <div style="margin-bottom: 15px;"><input type="number" name="age" placeholder="age" value="{{ old('age') ?? $worker->age }}">
          @error('age')
          {{ $message }}
          @enderror
        </div>
        <div style="margin-bottom: 15px;"><textarea name="description" placeholder="description">
                        {{ old('description') ?? $worker->description }}
                    </textarea>
          @error('description')
          {{ $message }}
          @enderror
        </div>
        <div style="margin-bottom: 15px;">
          <input id="isMarried" type="checkbox" name="is_married" {{ $worker->is_married ? 'checked' : '' }}>
          <label for="isMarried">Is married</label>
          @error('is_married')
          {{ $message }}
          @enderror
        </div>
        <div style="margin-bottom: 15px"><input type="submit" value="Сохранить"></div>
      </form>
    </div>
    <hr>
  </div>

@endsection
