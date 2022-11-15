<!doctype html>
    <form action="" method="post">
        Yearly income: 
            <input type="text" name="yearly" value="" />

        Additional income: 
            <input type="text" name="additional" value="" />

        Tax exemption: 
            <input type="text" name="exemption" value="" />
            <input type="submit" name="submit" value="Calculate Tax" />
    </form>  
</html>

<?php
class MainClass {
    public function main()
    {
        if (isset($_POST['submit'])) {
            $yearly = $_POST['yearly'];
            $additional = $_POST['additional'];
            $exemption = $_POST['exemption'];
            $total_income = $yearly + $additional - $exemption;
            if ($total_income < 30000){
                $tax = $total_income * 0.20;
            }else{
                $tax = $total_income * 0.25;
            }
        }
            echo ("Tax:". $tax);
        }
    }
?>