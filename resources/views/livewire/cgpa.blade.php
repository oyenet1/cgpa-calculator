<div>
    <div class="card text-left">
        <div class="card-body table-responsive">
            <table class="table table-striped w-100">
                <thead class="thead">
                    <tr>
                        <th>N0</th>
                        <th>Course Units</th>
                        <th>Grade</th>
                        <th title="Add another form" data-toggle="tooltip" data-placement="right" class="text-center">
                            <button wire:click="addNew" type="button" class="btn btn-sm btn-success">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <form action="">
                        @for ($i = 0; $i < count($inputs); $i++)
                            <tr>
                                <td scope="row">{{ $i + 1 }}</td>
                                <td>
                                    <input wire:model.lazy='inputs.{{ $i }}.unit' type="number"
                                        class="form-control" id="units" name="unit[]" id="" aria-describedby="helpId"
                                        placeholder="" />
                                </td>
                                <td>
                                    <select wire:model.lazy='inputs.{{ $i }}.score' name="scores[]"
                                        id="scores" class="form-control">
                                        <option value=5>A</option>
                                        <option value=4>B</option>
                                        <option value=3>C</option>
                                        <option value=2>D</option>
                                        <option value=1>E</option>
                                        <option value=0>F</option>
                                    </select>
                                </td>
                                <td>
                                    <button wire:click='remove({{ $i }})'
                                        class="btn btn-sm fas fa-minus btn-danger" type="button"> </button>
                                </td>
                            </tr>
                        @endfor
                    </form>
                </tbody>
                <tfoot>
                    <td></td>
                    <td class="font-weight-bold">Result:</td>
                    <td class="font-weight-bold">{{ $result ?? '' }}</td>
                    <td>
                        {{-- vue template for cgpa --}}
                        <button type="button" wire:click="calGpa" class="btn btn-primary">Calculate</button>
                    </td>
                </tfoot>
            </table>
        </div>
    </div>
</div>
