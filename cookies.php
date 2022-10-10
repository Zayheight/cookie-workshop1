<html>
<body>
<?php
// ถาค ้ กก ุ visit เป ีѸ ็นคาว ่ าง ให ่ สร ้ างค ้ กก ุ visit และก ีѸ ําหนดคาเร ่ มต ิѷ นเป ้ ็น 0
if (empty($_COOKIE["visit"])) {
setcookie("visit", 0, time() + 3600 * 24);
}
// ตรวจสอบวาค ่ กก ุ ชีѸ อ visit ถ ืѷ กก ู ําหนดคาไว ่ แล ้ วหร ้ อไม ื ่
// ถาย ้ ังไมก่ ําหนด
if (!isset($_COOKIE["visit"])) {
echo "Welcome to my website! Click here for a tour";
// ถาก ้ ําหนดคาแล ่ ว จะเพ ้ มค ิѷ าข ่ น 1 ค ึѸ า่
} else {
$visit = $_COOKIE["visit"] + 1;
setcookie("visit", $visit, time() + 3600 * 24);
echo "This is visit number $visit.";
}
?>
</body>
</html>