<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" name="title" value="{{ $conference['title'] ?? '' }}">
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea class="form-control" name="description">{{ $conference['description'] ?? '' }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Speakers</label>
    <input type="text" class="form-control" name="speakers" value="{{ $conference['speakers'] ?? '' }}">
</div>

<div class="mb-3">
    <label class="form-label">Date</label>
    <input type="date" class="form-control" name="date" value="{{ $conference['date'] ?? '' }}">
</div>

<div class="mb-3">
    <label class="form-label">Time</label>
    <input type="time" class="form-control" name="time" value="{{ $conference['time'] ?? '' }}">
</div>

<div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value="{{ $conference['address'] ?? '' }}">
</div>