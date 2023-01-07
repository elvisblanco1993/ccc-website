@extends('layouts.web')
@section('content')
    <header class="py-12 overflow-hidden">
        <div class="bg-gradient-to-tr from-slate-100 to-indigo-50 max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 rounded-xl">
            <h1 class="roboto-slab text-center font-bold text-3xl md:text-4xl capitalize">About Christ Community Church</h1>
        </div>
    </header>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Mission and Vision --}}
        <div class="">
            <h2 class="roboto-slab text-3xl font-bold">Mission and Vision</h2>

            <div class="mt-4">
                <h3 class="text-lg font-semibold">Vision</h3>
                <p>Christ Community Church as a God-glorifying, Christ-exalting and Bible-saturated body of believers, who love God and love people, for the glory of God in Christ and the advance of the gospel of Jesus Christ.</p>
            </div>

            <div class="mt-4">
                <h3 class="text-lg font-semibold">Mission</h3>
                <p>Christ Community Church exists to worship God, fellowship in community and build the body of Christ by making, maturing and multiplying  disciples until the Lord Jesus Christ returns (<a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Acts+2%3A42-47&version=ESV">Acts 2:42-47</a>, <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Mt.+28%3A18-20&version=ESV">Mt. 28:18-20</a>, <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Eph.+4%3A11-16&version=ESV">Eph. 4:11-16</a>).</p>
            </div>

            <div class="mt-4">
                <h3 class="text-lg font-semibold">Values</h3>
                <p>Principles that we hold dear and commit to following at Christ Community Church:</p>

                <ul class="mt-4 ml-4">
                    <li class="list-disc">
                        <h4 class="text-base font-semibold">Communion:</h4>
                        <p>Our greatest value is that of community and communion- to bring people into fellowship with God in a life-transforming way by virtue of the proclamation of biblical truth in family-integrated dialogue, worship and inter-personal relationships. Intentional and relational discipleship as a church family of families, is a primary vehicle for us to carry out this value (<a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Phil.+4%3A9&version=ESV">Phil. 4:9</a>; <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=1+Thess.+2%3A11-12&version=ESV">1 Thess. 2:11-12</a>; <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=2+Tim.+2%3A2&version=ESV">2 Tim. 2:2</a>).</p>
                    </li>
                    <li class="list-disc mt-4">
                        <h4 class="text-base font-semibold">Communication:</h4>
                        <p>By way of the expositional preaching and teaching of God’s Word in the Sunday gathering, which is to be affirmed and applied through small-group discipleship. By expositional communication, we mean that we are to teach what all of the Bible says - what it means by what it says, and what we are to do by what it means and says (life application and Spirit-filled transformation), by encouragement in an interactive dialogue in our gatherings (<a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Acts+20%3A20-21&version=ESV">Acts 20:20-21</a>; <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=2+Tim.+4%3A1-4&version=ESV">2 Tim. 4:1-4</a>).</p>
                    </li>
                    <li class="list-disc mt-4">
                        <h4 class="text-base font-semibold">Celebration:</h4>
                        <p>To celebrate the triune personhood of God through worship music that conforms to our vision, as being God-glorifying, Bible-saturated, Christ-exalting and Spirit-filled, with a view towards the facilitation of congregational singing in worship and edification of the body (<a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Eph.+5%3A19&version=ESV">Eph. 5:19</a>, <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Col.+3%3A16&version=ESV">Col. 3:16</a>).</p>
                    </li>
                    <li class="list-disc mt-4">
                        <h4 class="text-base font-semibold">Contribution:</h4>
                        <p>corporate giving of our time, talents and treasure is to occur as a form of worship to God, and as a means to support the church’s kingdom mission and to do “good to all men, especially to those who are of the household of faith” (<a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Gal.+6%3A10&version=ESV">Gal. 6:10</a>; <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Acts+2%3A44-45&version=ESV">Acts 2:44-45</a>).</p>
                    </li>
                    <li class="list-disc mt-4">
                        <h4 class="text-base font-semibold">Commission:</h4>
                        <p>community outreach and ministry, manifesting the truth of Christ in love, and initiated and led by the local body itself (<a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Mt.+22%3A37-40&version=ESV">Mt. 22:37-40</a>; <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=1+Cor.+12%3A4-7&version=ESV">1 Cor. 12:4-7</a>; <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=1+Cor.+12%3A4-7&version=ESV">Eph. 4:10-11</a>), and to be continued through the ministry and giving towards missions (<a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Mt.+28%3A19-20&version=ESV">Mt. 28:19-20</a>; <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=Acts+1%3A8&version=ESV">Acts 1:8</a>; <a target="_blank" class="underline hover:text-indigo-600" href="https://www.biblegateway.com/passage/?search=2+Cor.+9%3A2-8&version=ESV">2 Cor. 9:2-8</a>) both near and far.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12">
            <h2 class="roboto-slab text-3xl font-bold">Meet Our Leaders</h2>

            <div class="mt-6 grid grid-cols-3 gap-8">
                <div class="mt-12 col-span-3 sm:col-span-1">
                    <img src="{{ asset('CCC_PORTRAITS-4.jpg') }}" alt="" class="rounded-lg shadow-lg">
                    <h4 class="mt-4 text-lg font-bold">Jorge Quiñones</h4>
                    <p class="text-slate-700">Elder, Worship Coordinator</p>
                    <a class="underline text-indigo-600 text-sm" href="mailto:info@christcommchurch.org">info@christcommchurch.org</a>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <img src="{{ asset('Pastor_Bernie.jpg') }}" alt="" class="rounded-lg shadow-lg">
                    <h4 class="mt-4 text-lg font-bold">Bernie Diaz</h4>
                    <p class="text-slate-700">Pastor, Elder</p>
                    <a class="underline text-indigo-600 text-sm" href="mailto:info@christcommchurch.org">info@christcommchurch.org</a>
                </div>
                <div class="mt-12 col-span-3 sm:col-span-1">
                    <img src="{{ asset('robert-pimentel.jpeg') }}" alt="" class="rounded-lg shadow-lg">
                    <h4 class="mt-4 text-lg font-bold">Robert Pimentel</h4>
                    <p class="text-slate-700">Deacon</p>
                    <a class="underline text-indigo-600 text-sm" href="mailto:info@christcommchurch.org">info@christcommchurch.org</a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12"></div>
@endsection
