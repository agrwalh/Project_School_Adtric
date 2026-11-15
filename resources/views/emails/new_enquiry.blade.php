<x-mail::message>
# New Admission Enquiry Received

A new admission enquiry has been submitted on the school portal:

**Parent Name:** {{ $enquiry->parent_name }}  
**Child's Name:** {{ $enquiry->student_name }}  
**Programme / Stage:** {{ $enquiry->class_applying_for }}  
**Mobile:** +91 {{ $enquiry->mobile }}  
**Email:** {{ $enquiry->email ?? 'Not provided' }}  
**Submitted At:** {{ $enquiry->created_at->format('d M Y, h:i A') }}  

@if($enquiry->message)
**Additional Note:**  
{{ $enquiry->message }}
@endif

<x-mail::button :url="route('admin.enquiries.index')">
View in Admin Panel
</x-mail::button>

Thanks,<br>
{{ config('app.name') }} Admissions System
</x-mail::message>
