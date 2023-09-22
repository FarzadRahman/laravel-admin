<div class="row">
    <div class="col-md-4 form-group">
        <label>Select Matured Company</label>
        <select class="form-control">
            <option>comp 1</option>
            <option>comp 2</option>
            <option>comp 3</option>
            <option>comp 4</option>
        </select>
    </div>

    <div class="col-md-4 form-group">
        <label>Available Quantity</label>
        <input type="number" class="form-control" value="500" id="sale_holding_qty"
              >
    </div>

    <div class="col-md-4 form-group">
        <label>Enter Sale Quantity</label>
        <input type="number" class="form-control" placeholder="number of share" id="sale_order_qty" onchange="calculateSaleTotal()">
    </div>



    <div class="col-md-4 form-group">
        <label>% of investment</label>
        <input type="number" class="form-control" placeholder="%" id="percent_of_sale" readonly>
    </div>
    <div class="col-md-12">
        <br>
    </div>


    <button class="btn btn-success" onclick="loadOnGrid()">Show on grid</button>
</div>


{{--<div class="row">--}}
{{--    <table class="table table-bordered">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>A/C</th>--}}
{{--            <th>available balance</th>--}}
{{--            <th>Number of Share</th>--}}
{{--            <th>purchase amount</th>--}}
{{--        </tr>--}}

{{--        </thead>--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <td>1</td>--}}
{{--            <td><input value="3000" class="form-control" name="ac_balance[]" id="ac_balance[1]" readonly></td>--}}
{{--            <td><input class="form-control" id="ac_share0"></td>--}}
{{--            <td><input class="form-control" id="ac_purchase0"></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>2</td>--}}
{{--            <td><input value="2000" class="form-control" name="ac_balance[]" id="ac_balance[2]" readonly></td>--}}
{{--            <td><input class="form-control" id="ac_share1"></td>--}}
{{--            <td><input class="form-control" id="ac_purchase1"></td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--        <tfoot>--}}
{{--        <tr>--}}
{{--            <td>Total</td>--}}
{{--            <td>5000</td>--}}
{{--            <td><input class="form-control" id="total_ac_share"></td>--}}
{{--            <td><input class="form-control" id="total_ac_purchase"></td>--}}

{{--        </tr>--}}
{{--        </tfoot>--}}
{{--    </table>--}}
{{--</div>--}}

<script>
    function calculateSaleTotal(){
        // sale_holding_qty
        // sale_order_qty
        // percent_of_sale
        sale_holding_qty=$('#sale_holding_qty').val();
        sale_order_qty=$('#sale_order_qty').val();

        $('#percent_of_sale').val(sale_order_qty/sale_holding_qty*100);



    }
</script>


