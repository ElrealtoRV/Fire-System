<script>
	document.addEventListener("DOMContentLoaded", () => {
		Livewire.hook('message.processed', (component) => {
			setTimeout(function() {
				$('#alert').fadeOut('fast');
			}, 5000);
		});
	});

	window.livewire.on('closeEmployeeModal', () => {
		$('#employeeModal').modal('hide');
	});
	window.livewire.on('openEmployeeModal', () => {
		$('#employeeModal').modal('show');
	});

	window.livewire.on('closeUserInquiryModal', () => {
		$('#userInquiryModal').modal('hide');
	});
	window.livewire.on('openUserInquiryModal', () => {
		$('#userInquiryModal').modal('show');
	});
</script>
