/**
 * Created by nikol.paraskova on 22.12.2016 г..
 */

$('#topNavManageOrder').addClass('active');

manageOrderTable = $("#manageOrderTable").DataTable({
    'ajax': 'php_action/fetchOrder.php',
    'order': []
});
