<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            <label for="">Start Date</label>
            <input type="date" class="form-control" name="start_date">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="">End Date</label>
            <input type="date" class="form-control" name="end_date">
        </div>
    </div>
</div>

@php
$month = date('d/m/Y', strtotime($item->created_at));
// dd($month);
echo $month;
@endphp
