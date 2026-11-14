@extends('layouts.admin')

@section('title', 'Manage Admission Enquiries')

@section('content')

<!-- Header & Export Action -->
<div class="mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h1 class="text-2xl sm:text-3xl font-extrabold font-heading text-brand-navy">
            Admission Enquiries
        </h1>
        <p class="text-slate-500 text-sm mt-1">
            Review prospective parents, update application follow-up statuses via AJAX, and track CRM sync.
        </p>
    </div>

    <div class="flex items-center space-x-3">
        <!-- Export to CSV button (Good-to-have requirement) -->
        <a href="{{ route('admin.enquiries.export-csv', request()->all()) }}" 
           class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs uppercase tracking-wider shadow-md shadow-emerald-600/20 transition flex items-center">
            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Export to CSV
        </a>
    </div>
</div>

<!-- AJAX Toast Notification -->
<div id="status-toast" class="fixed top-20 right-6 z-50 transform transition-all duration-300 translate-y-[-20px] opacity-0 pointer-events-none">
    <div class="bg-brand-navy text-white px-5 py-3 rounded-2xl shadow-2xl flex items-center space-x-3 border border-white/20">
        <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
        <span id="toast-message" class="text-xs font-bold">Status updated successfully</span>
    </div>
</div>

<!-- Search & Status Filter Bar -->
<div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm mb-6">
    <form method="GET" action="{{ route('admin.enquiries.index') }}" class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">
        
        <!-- Search by Name or Mobile (Good-to-have requirement) -->
        <div class="sm:col-span-6">
            <div class="relative">
                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </span>
                <input type="text" 
                       name="search" 
                       value="{{ request('search') }}" 
                       placeholder="Search by parent name, child name, mobile, or email..." 
                       class="w-full pl-10 pr-4 py-2 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink placeholder-slate-400">
            </div>
        </div>

        <!-- Filter Status Dropdown -->
        <div class="sm:col-span-4">
            <select name="status" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs focus:border-brand-pink focus:ring-1 focus:ring-brand-pink text-slate-700">
                <option value="">All Enquiry Statuses</option>
                <option value="New" {{ request('status') === 'New' ? 'selected' : '' }}>New Enquiries</option>
                <option value="Contacted" {{ request('status') === 'Contacted' ? 'selected' : '' }}>Contacted</option>
                <option value="Closed" {{ request('status') === 'Closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </div>

        <!-- Submit & Reset -->
        <div class="sm:col-span-2 flex items-center space-x-2">
            <button type="submit" class="w-full py-2 px-3 rounded-xl bg-brand-navy hover:bg-brand-navy-light text-white font-bold text-xs uppercase transition">
                Search
            </button>
            @if(request()->hasAny(['search', 'status']))
                <a href="{{ route('admin.enquiries.index') }}" class="py-2 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold text-xs transition" title="Clear Filters">
                    ✕
                </a>
            @endif
        </div>

    </form>
</div>

<!-- Enquiries Table -->
<div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-slate-400 uppercase font-bold text-[10px]">
                    <th class="py-3.5 px-4">ID</th>
                    <th class="py-3.5 px-4">Student & Class</th>
                    <th class="py-3.5 px-4">Parent Info</th>
                    <th class="py-3.5 px-4">Contact Details</th>
                    <th class="py-3.5 px-4">Message / Notes</th>
                    <th class="py-3.5 px-4">Follow-Up Status (AJAX)</th>
                    <th class="py-3.5 px-4">CRM Push</th>
                    <th class="py-3.5 px-4">Submitted</th>
                    <th class="py-3.5 px-4 text-right">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 font-medium text-slate-700">
                @forelse($enquiries as $enquiry)
                    <tr class="hover:bg-slate-50/70 transition" id="row-{{ $enquiry->id }}">
                        <!-- ID -->
                        <td class="py-3.5 px-4 text-slate-400 font-mono">
                            #{{ $enquiry->id }}
                        </td>

                        <!-- Student & Class -->
                        <td class="py-3.5 px-4">
                            <div class="font-bold text-brand-navy text-sm">{{ $enquiry->student_name }}</div>
                            <span class="inline-block mt-0.5 px-2 py-0.5 rounded text-[10px] font-extrabold bg-pink-100 text-brand-pink">
                                {{ $enquiry->class_applying_for }}
                            </span>
                        </td>

                        <!-- Parent Name -->
                        <td class="py-3.5 px-4 font-semibold text-slate-800">
                            {{ $enquiry->parent_name }}
                        </td>

                        <!-- Contact Details -->
                        <td class="py-3.5 px-4 space-y-0.5">
                            <div class="flex items-center text-slate-800 font-semibold">
                                <a href="tel:{{ $enquiry->mobile }}" class="hover:text-brand-pink font-mono">
                                    +91 {{ $enquiry->mobile }}
                                </a>
                            </div>
                            @if($enquiry->email)
                                <div class="text-[11px] text-slate-500">
                                    <a href="mailto:{{ $enquiry->email }}" class="hover:text-brand-pink truncate max-w-[150px] inline-block">
                                        {{ $enquiry->email }}
                                    </a>
                                </div>
                            @endif
                        </td>

                        <!-- Message -->
                        <td class="py-3.5 px-4 max-w-xs">
                            @if($enquiry->message)
                                <p class="text-slate-600 line-clamp-2 text-[11px]" title="{{ $enquiry->message }}">
                                    {{ $enquiry->message }}
                                </p>
                            @else
                                <span class="text-slate-400 italic text-[11px]">No notes</span>
                            @endif
                        </td>

                        <!-- Status with Instant AJAX Selector -->
                        <td class="py-3.5 px-4">
                            <div class="relative inline-flex items-center">
                                <select onchange="updateStatus(this, {{ $enquiry->id }})" 
                                        class="status-select px-3 py-1.5 pr-8 rounded-xl text-xs font-bold border transition cursor-pointer
                                               {{ $enquiry->status === 'New' ? 'bg-pink-50 border-pink-300 text-brand-pink' : '' }}
                                               {{ $enquiry->status === 'Contacted' ? 'bg-amber-50 border-amber-300 text-amber-800' : '' }}
                                               {{ $enquiry->status === 'Closed' ? 'bg-emerald-50 border-emerald-300 text-emerald-800' : '' }}">
                                    <option value="New" {{ $enquiry->status === 'New' ? 'selected' : '' }}>New</option>
                                    <option value="Contacted" {{ $enquiry->status === 'Contacted' ? 'selected' : '' }}>Contacted</option>
                                    <option value="Closed" {{ $enquiry->status === 'Closed' ? 'selected' : '' }}>Closed</option>
                                </select>
                                <div class="status-spinner-{{ $enquiry->id }} hidden ml-2">
                                    <svg class="animate-spin h-3.5 w-3.5 text-brand-pink" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </div>
                            </div>
                        </td>

                        <!-- CRM Push Result -->
                        <td class="py-3.5 px-4">
                            @if($enquiry->crm_status === 'Sent')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-extrabold bg-emerald-100 text-emerald-800 shadow-sm" title="{{ $enquiry->crm_response }}">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-1.5"></span>
                                    Sent
                                </span>
                            @elseif($enquiry->crm_status === 'Failed')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-extrabold bg-rose-100 text-rose-800 shadow-sm cursor-help" title="{{ $enquiry->crm_response ?? 'Connection failed or timeout' }}">
                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-500 mr-1.5"></span>
                                    Failed
                                </span>
                            @else
                                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] text-slate-400 bg-slate-100">
                                    Pending
                                </span>
                            @endif
                        </td>

                        <!-- Submitted Time -->
                        <td class="py-3.5 px-4 text-slate-400 text-[11px] whitespace-nowrap">
                            <div>{{ $enquiry->created_at->format('M d, Y') }}</div>
                            <div class="text-[10px] text-slate-400">{{ $enquiry->created_at->format('h:i A') }}</div>
                        </td>

                        <!-- Action -->
                        <td class="py-3.5 px-4 text-right">
                            <form method="POST" action="{{ route('admin.enquiries.destroy', $enquiry) }}" onsubmit="return confirm('Delete this enquiry record?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-1.5 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition" title="Delete">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center py-12 text-slate-400">
                            No admission enquiries match the selected filter.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($enquiries->hasPages())
        <div class="p-4 border-t border-slate-200">
            {{ $enquiries->links() }}
        </div>
    @endif
</div>

@push('scripts')
<script>
// AJAX Status Update Handler
async function updateStatus(selectElement, enquiryId) {
    const newStatus = selectElement.value;
    const spinner = document.querySelector(`.status-spinner-${enquiryId}`);
    
    // Show spinner
    if (spinner) spinner.classList.remove('hidden');
    selectElement.disabled = true;

    try {
        const response = await fetch(`/admin/enquiries/${enquiryId}/status`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ status: newStatus })
        });

        const data = await response.json();

        if (response.ok && data.success) {
            // Update styling of the dropdown
            selectElement.className = 'status-select px-3 py-1.5 pr-8 rounded-xl text-xs font-bold border transition cursor-pointer ';
            if (newStatus === 'New') {
                selectElement.classList.add('bg-pink-50', 'border-pink-300', 'text-brand-pink');
            } else if (newStatus === 'Contacted') {
                selectElement.classList.add('bg-amber-50', 'border-amber-300', 'text-amber-800');
            } else if (newStatus === 'Closed') {
                selectElement.classList.add('bg-emerald-50', 'border-emerald-300', 'text-emerald-800');
            }

            showToast(data.message || `Status updated to ${newStatus}`);
        } else {
            alert('Failed to update status: ' + (data.message || 'Unknown error'));
        }
    } catch (err) {
        console.error('AJAX status error:', err);
        alert('Network error while updating status.');
    } finally {
        if (spinner) spinner.classList.add('hidden');
        selectElement.disabled = false;
    }
}

function showToast(msg) {
    const toast = document.getElementById('status-toast');
    const msgEl = document.getElementById('toast-message');
    if (!toast || !msgEl) return;

    msgEl.textContent = msg;
    toast.classList.remove('opacity-0', 'translate-y-[-20px]', 'pointer-events-none');
    toast.classList.add('opacity-100', 'translate-y-0');

    setTimeout(() => {
        toast.classList.remove('opacity-100', 'translate-y-0');
        toast.classList.add('opacity-0', 'translate-y-[-20px]', 'pointer-events-none');
    }, 3000);
}
</script>
@endpush

@endsection
