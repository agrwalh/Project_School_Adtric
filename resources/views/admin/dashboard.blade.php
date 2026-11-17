@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')

<!-- Welcome Banner -->
<div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4 bg-white p-6 rounded-3xl border border-slate-200 shadow-sm">
    <div>
        <h1 class="text-2xl sm:text-3xl font-extrabold font-heading text-brand-navy">
            Welcome back, {{ Auth::user()->name }} 👋
        </h1>
        <p class="text-slate-500 text-sm mt-1">
            Manage school announcements, event coverage, and prospective student admission enquiries.
        </p>
    </div>

    <div class="flex items-center space-x-3">
        <a href="{{ route('admin.news-events.create') }}" class="px-5 py-2.5 rounded-xl bg-brand-pink hover:bg-brand-pink-hover text-white font-bold text-xs uppercase tracking-wider shadow-md shadow-pink-500/20 transition flex items-center">
            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
            Add News / Event
        </a>
        <a href="{{ route('admin.enquiries.index') }}" class="px-5 py-2.5 rounded-xl bg-brand-navy hover:bg-brand-navy-light text-white font-bold text-xs uppercase tracking-wider shadow transition">
            View Enquiries
        </a>
    </div>
</div>

<!-- Metrics Overview Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    
    <!-- Total Enquiries -->
    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm flex items-center justify-between">
        <div>
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Enquiries</span>
            <div class="text-3xl font-black font-heading text-brand-navy mt-1">{{ $stats['total_enquiries'] }}</div>
            <span class="text-xs text-brand-pink font-semibold mt-1 inline-block">{{ $stats['new_enquiries'] }} New awaiting review</span>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-pink-50 text-brand-pink flex items-center justify-center font-bold text-xl">
            📋
        </div>
    </div>

    <!-- News & Events -->
    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm flex items-center justify-between">
        <div>
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Published News/Events</span>
            <div class="text-3xl font-black font-heading text-brand-navy mt-1">{{ $stats['published_news_events'] }}</div>
            <span class="text-xs text-slate-500 mt-1 inline-block">out of {{ $stats['total_news_events'] }} total</span>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-sky-50 text-sky-600 flex items-center justify-center font-bold text-xl">
            📰
        </div>
    </div>

    <!-- Contacted / Converted -->
    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm flex items-center justify-between">
        <div>
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Contacted / Closed</span>
            <div class="text-3xl font-black font-heading text-brand-navy mt-1">{{ $stats['contacted_enquiries'] + $stats['closed_enquiries'] }}</div>
            <span class="text-xs text-emerald-600 font-semibold mt-1 inline-block">{{ $stats['closed_enquiries'] }} Enrolments Closed</span>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-xl">
            🎓
        </div>
    </div>

    <!-- CRM Sync Status -->
    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm flex items-center justify-between">
        <div>
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">CRM Webhook Sync</span>
            <div class="text-3xl font-black font-heading text-brand-navy mt-1">{{ $stats['crm_sent'] }}</div>
            <span class="text-xs {{ $stats['crm_failed'] > 0 ? 'text-rose-600 font-bold' : 'text-slate-400' }} mt-1 inline-block">
                {{ $stats['crm_failed'] }} Failed dispatches
            </span>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-xl">
            ⚡
        </div>
    </div>

</div>

<!-- Recent Submissions & Activities -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
    
    <!-- Recent Enquiries (8 cols) -->
    <div class="lg:col-span-8 bg-white rounded-3xl border border-slate-200 shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="font-heading font-extrabold text-lg text-brand-navy">Recent Admission Enquiries</h2>
            <a href="{{ route('admin.enquiries.index') }}" class="text-xs font-bold text-brand-pink hover:underline uppercase tracking-wider">
                View All ({{ $stats['total_enquiries'] }}) →
            </a>
        </div>

        @if($recentEnquiries->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead>
                        <tr class="border-b border-slate-100 text-slate-400 uppercase font-bold text-[10px]">
                            <th class="py-3 px-2">Student</th>
                            <th class="py-3 px-2">Class</th>
                            <th class="py-3 px-2">Parent & Contact</th>
                            <th class="py-3 px-2">Status</th>
                            <th class="py-3 px-2">CRM</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 font-medium text-slate-700">
                        @foreach($recentEnquiries as $enquiry)
                            <tr class="hover:bg-slate-50 transition">
                                <td class="py-3.5 px-2 font-bold text-brand-navy">
                                    {{ $enquiry->student_name }}
                                </td>
                                <td class="py-3.5 px-2">
                                    <span class="px-2 py-0.5 rounded-md bg-slate-100 text-slate-700 font-semibold text-[11px]">
                                        {{ $enquiry->class_applying_for }}
                                    </span>
                                </td>
                                <td class="py-3.5 px-2">
                                    <div>{{ $enquiry->parent_name }}</div>
                                    <div class="text-[11px] text-slate-400 font-mono">+91 {{ $enquiry->mobile }}</div>
                                </td>
                                <td class="py-3.5 px-2">
                                    @if($enquiry->status === 'New')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase bg-pink-100 text-brand-pink">New</span>
                                    @elseif($enquiry->status === 'Contacted')
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase bg-amber-100 text-amber-800">Contacted</span>
                                    @else
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase bg-emerald-100 text-emerald-800">Closed</span>
                                    @endif
                                </td>
                                <td class="py-3.5 px-2">
                                    @if($enquiry->crm_status === 'Sent')
                                        <span class="text-emerald-600 font-bold text-[11px]">✓ Sent</span>
                                    @elseif($enquiry->crm_status === 'Failed')
                                        <span class="text-rose-600 font-bold text-[11px]">✗ Failed</span>
                                    @else
                                        <span class="text-slate-400 text-[11px]">Pending</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-slate-400 text-xs py-8 text-center">No admission enquiries recorded yet.</p>
        @endif
    </div>

    <!-- Recent News/Events Sidebar (4 cols) -->
    <div class="lg:col-span-4 bg-white rounded-3xl border border-slate-200 shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="font-heading font-extrabold text-lg text-brand-navy">Latest Stories</h2>
            <a href="{{ route('admin.news-events.index') }}" class="text-xs font-bold text-brand-pink hover:underline uppercase tracking-wider">
                Manage →
            </a>
        </div>

        <div class="space-y-4">
            @forelse($recentNews as $news)
                <div class="flex items-start space-x-3 pb-3 border-b border-slate-100 last:border-0">
                    <img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="w-12 h-12 rounded-xl object-cover bg-slate-100 flex-shrink-0">
                    <div class="flex-grow">
                        <span class="text-[10px] font-bold text-brand-pink uppercase">{{ $news->category }}</span>
                        <h4 class="text-xs font-bold text-slate-800 line-clamp-1 leading-snug">
                            <a href="{{ route('admin.news-events.edit', $news) }}" class="hover:text-brand-pink">
                                {{ $news->title }}
                            </a>
                        </h4>
                        <div class="flex items-center space-x-2 text-[10px] text-slate-400 mt-0.5">
                            <span>{{ $news->event_date->format('M d, Y') }}</span>
                            <span>•</span>
                            <span>{{ $news->is_published ? 'Published' : 'Draft' }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-slate-400 text-xs text-center py-4">No stories added yet.</p>
            @endforelse
        </div>

        <div class="pt-4 mt-2">
            <a href="{{ route('admin.news-events.create') }}" class="w-full py-2.5 rounded-xl border-2 border-dashed border-slate-200 hover:border-brand-pink text-slate-600 hover:text-brand-pink font-bold text-xs uppercase flex items-center justify-center transition">
                + Create New Event
            </a>
        </div>
    </div>

</div>

@endsection
