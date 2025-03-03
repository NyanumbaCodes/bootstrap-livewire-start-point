<li class="nav-header">Initialization</li>
<x-new-nav-link title="Dashboard" route="employee.dashboard" bi_icon="bi-speedometer2"></x-new-nav-link>

<li class="nav-header">Employment Details</li>
<x-new-nav-link title="My Profile" route="employee.profile" bi_icon="bi-person-gear"></x-new-nav-link>
<x-new-nav-link title="My Contracts" route="employee.contracts" bi_icon="bi-wallet2"></x-new-nav-link>

<li class="nav-header">Accounts</li>
<x-new-nav-link title="Payslips" route="employee.payslips" bi_icon="bi-receipt"></x-new-nav-link>

<li class="nav-header">Support</li>
<x-new-nav-link-dropdown title="My Leave Requests" route="employee.leave-requests*" bi_icon="bi-calendar-x">
    <x-new-nav-link bi_icon="" title="Overview" route="employee.leave-requests.index"></x-new-nav-link>
    <x-new-nav-link bi_icon="" title="New Leave Request" route="employee.leave-requests.create"></x-new-nav-link>
</x-new-nav-link-dropdown>
