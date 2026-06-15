<form>
    @csrf
    <div class="container">
        <div class="row">

            <div class="col">
                <p class="text-info">Operations:</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="addition" id="addition">
                    <label class="form-check-label" for="addition">
                        +
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="subtraction" id="subtraction">
                    <label class="form-check-label" for="subtraction">
                        -
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="multiplication" id="multiplication">
                    <label class="form-check-label" for="multiplication">
                        *
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="division" id="division">
                    <label class="form-check-label" for="division">
                        /
                    </label>
                </div>
            </div>

            <div class="col">
                <p class="text-info">Configurations</p>
                <div class="input-group flex-nowrap w-50">
                    <span class="input-group-text" id="min">Min</span>
                    <input type="number" class="form-control" aria-label="min" aria-describedby="min">
                </div>
  
                <br>

                <div class="input-group flex-nowrap w-50">
                    <span class="input-group-text" id="max">Max</span>
                    <input type="number" class="form-control" aria-label="max" aria-describedby="max">
                </div>
            </div>

            <div class="col">
                <p class="text-info">Number of Exercises</p>
                <div class="input-group flex-nowrap w-50">
                    <span class="input-group-text" id="quantity">Quantity</span>
                    <input type="number" class="form-control" aria-label="quantity" aria-describedby="quantity">
                </div>
            </div>

        </div>
        <br>
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Generate Exercises</button>
        </div>
    </div>

</form>