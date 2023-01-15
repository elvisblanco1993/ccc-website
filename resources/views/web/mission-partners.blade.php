@extends('layouts.web')
@section('content')
    <header class="py-12 overflow-hidden">
        <div class="bg-gradient-to-tr from-slate-100 to-indigo-50 max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 md:rounded-xl">
            <h1 class="roboto-slab text-center font-bold text-3xl md:text-4xl capitalize">Our Mission Partners</h1>
        </div>
    </header>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Heartbeat of Miami --}}
        <div class="grid grid-cols-6 gap-4 items-center">
            <div class="col-span-6 sm:col-span-2">
                <img src="{{ asset('heartbeat-of-miami.png') }}" alt="" class="border rounded-lg shadow">
            </div>
            <div class="col-span-6 sm:col-span-4 py-4">
                <a href="https://heartbeatofmiami.org/" target="_blank" class="underline hover:text-ccc">
                    <h2 class="roboto-slab text-2xl font-bold">Heartbeat of Miami</h2>
                </a>
                <p class="mt-2">Heartbeat of Miami is a bold and winsome call to the Christian community to open 3 to 5 pregnancy help centers in the neediest neighborhoods of Miami over the next two years. These centers will be equipped with ultrasound and staffed by nurses, trained peer counselors, and volunteers from the Christian community. When established they will save thousands of women every year from the violence and agony of abortion- in direct competition to the nearly 30+ abortion facilities operating in Miami. They are targeting and exploiting women who are anxious and unprepared for pregnancy.</p>
                <p class="mt-2">In response to God's call to " rescue the weak and the needy" and "deliver them from the hand of the wicked" (Psalm 82:3), Heartbeat of Miami will be a practical way to save lives in a life changing way for the glory of God and the advancement of the Gospel. To succeed it will take hard work, strategic planning, generous giving and prayer from Christians and Churches in and around Miami. May God give you a burning heart to join in this Great Work.</p>
            </div>
        </div>

        {{-- Rock of Ages --}}
        <div class="mt-12 grid grid-cols-6 gap-4 items-center">
            <div class="col-span-6 sm:col-span-2 bg-black h-full flex items-center rounded-lg shadow p-2">
                <img src="{{ asset('rock-of-ages-ministry.png') }}" alt="">
            </div>
            <div class="col-span-6 sm:col-span-4 py-4">
                <a href="https://roapm.org/" target="_blank" class="underline hover:text-ccc">
                    <h2 class="roboto-slab text-2xl font-bold">Rock of Ages Ministries</h2>
                </a>
                <p class="mt-2">Rock of Ages Ministries was established in 1978 and is a worldwide outreach ministering on the continents of Europe, Asia, Africa, North and South America. We offer ministry outreach to prisons, schools and the military through our Publication Department, Revivals, Chaplaincy Program, Discipleship Institute, and our College of Biblical Studies. For further information on any of these ministries, please go to the Ministries menu.</p>
                <p class="mt-2">We are grateful for the rich heritage God has given to us through the strong, godly leadership of Dr. Ed Ballew and Dr. Ron Gearis. At the close of 2013 God allowed the ministry to surpass a milestone of reaching over 527,177 souls for Christ and discipling over 23,000 students daily in our Discipleship Institute.</p>
            </div>
        </div>
    </div>
    <div class="py-12"></div>
@endsection
