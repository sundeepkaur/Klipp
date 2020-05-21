@extends('layouts.home-nav-footer')
@section('content')
<div id="wrapper">
    <div class="gridContainer" id="grid1">
        <div id="item-1" class="gridItem">
            <a href="/home"><i class="fa fa-home"></i> Home</a>
            <a href="#account"><i class="fa fa-user"></i> Account</a>
            <a href="#Favourite"><i class="fa fa-heart"></i> Favourite</a>
            <a href="/contactUs"><i class="fa fa-envelope"></i> Contact</a>
            <a href="/faq"><i class="fa fa-question-circle"></i> Help!</a>
        </div>
    </div>
    <div class="gridContainer" id="grid2">
        <div id="item-2" class="gridItem">
            <h2>Frequently Asked Questions ?</h2>
            <button class="collapsible">Is Klipp Co. is hiring and how do i apply ?</button>
            <div class="myContent">
                <p>We are always on the lookout for talented individuals to join our team.<br/> You can find opportunities
                    and apply online for positions at our offices here.</p>
            </div>
            <button class="collapsible">Can i buy Gift Cards ?</button>
            <div class="myContent">
                <p>Yes, Klipp Co. is happy to offer gift cards in amounts between $5 to $500.</p>
            </div>
            <button class="collapsible">How can i request donations for a community event ?</button>
            <div class="myContent">
                <p>Our company Owners/Operators are very active in their community and giving back to our community is a value we all share.<br/>
                    We encourage you to work directly with our company office and discuss what fundraising opportunities or support may be available for your charitable
                    organization or community group.</p>
            </div>
            <button class="collapsible">Why am i having trouble viewing flyer ?</button>
            <div class="myContent">
                <p>We know how frustrating this can be. Many computers store web pages on the hard drive to help access web pages more quickly.<br/>
                    What this means is that when your browser retrieves a page from its cache instead of the Internet, the page displayed may not be the most
                    recent version.<br/> If an older version of our flyer appears, first try refreshing the page.<br/> If the problem persists, or you have received an
                    error message, follow your browser’s help menu to clear your computer’s cache.<br/> This should solve the problem.</p>
            </div>
            <button class="collapsible">Why can't i find your company office location in my neighbourhood ?</button>
            <div class="myContent">
                <p>Right now, Klipp Co.  is only at one selected location in Ontario.<br/> Keep checking this site for new upcoming company office openings –
                    hopefully we will be coming to your community soon!</p>
            </div>
            <button class="collapsible">Wondering if you carry a particular product - can i check product availability online ?</button>
            <div class="myContent">
                <p>Yes, you can check for individual product availability online.<br/> However, you can access information about our Compliments
                    line of products by visiting <br/>our web site at www.klipp.ca or contact at our given number and the staff
                    there would be happy to assist you.</p>
            </div>
            <button class="collapsible">What is your product return policy ?</button>
            <div class="myContent">
                <p>At Klipp Co. we stand behind our products. If you aren’t satisfied with an item, bring it back with your receipt within 14 days
                    <br/>and we’ll give you your money back. Also, we suggest that you contact the company that manufactured the product directly.<br/>
                    Manufacturers are the experts on their own products and welcome customer feedback.</p>
            </div>
            <button class="collapsible">What does "cheaper guaranteed" mean ?</button>
            <div class="myContent">
                <p>Our guarantee that we’re cheaper means that if a major supermarket competitor within your local geographic trade area offers a lower price
                    on any item that we carry in our company office or online,<br/> simply show us their price in their flyer/ad (current) or
                    on their receipt (within 7 days of purchase)<br/>
                    and we will sell you that item for 1¢ less. Applies to identical items , same brand, item type, size<br/>
                    and attributes or comparable items in the case of private label. Does not apply to prescriptions or gift cards. Excludes ‘spend x get x’;<br/>
                    clearance sales, and ‘free’ promotions and discounts obtained through loyalty or other preferred customer programs.<br/> Does not apply to competition
                    misprints or withdrawn or corrected advertisements.<br/> We reserve the right to verify competitor prices and to limit quantities to 2 identical
                    products.<br/> “Our major supermarket competitors”, “geographic trade areas” and “comparable items” are determined solely by us
                    and are based on a number of factors that can change from time to time.<br/> We reserve the right to make changes to this program
                    without prior notice.</p>
            </div>
            <button class="collapsible">Do you price match products ?</button>
            <div class="myContent">
                <p>If a major supermarket competitor within your local geographic trade area offers a lower price on a product that we carry in our company office or online,<br/>
                    simply show us their price in their flyer/ad (current) and we will sell you a comparable Turkey for 1¢/kg less. Excludes ‘spend x get x’;<br/>
                    clearance sales, and ‘free’ promotions and discounts obtained through loyalty or
                    other preferred customer programs. <br/>Does not apply to competition misprints or withdrawn or corrected advertisements. <br/>We reserve the right to verify
                    competitor prices.<br/> “Our major supermarket competitors”, “geographic trade areas” and “comparable items”
                    are determined solely by us <br/>and are based on a number of factors that can change from time to time. We reserve the right to make changes to this
                    program without prior notice.</p>
            </div>
            <button class="collapsible">How will your company handle cash transactions following the government of Canada's plan to eliminate the penny ?</button>
            <div class="myContent">
                <p>The Government of Canada is phasing out the penny.<br/> Starting February 4, 2013, pennies will no longer be distributed to businesses or financial institutions.<br/>
                    In our location, pennies will continue to be accepted. For cash payments where change is owed, your change will be rounded to the nearest five-cent increment<br/>
                    using the following Government of Canada rounding guidelines:<br/><br/>

                    • Amounts ending in 1 cent and 2 cents are rounded down to the nearest 10 cents<br/>
                    • Amounts ending in 3 cents and 4 cents are rounded up to the nearest 5 cents<br/>
                    • Amounts ending in 6 cents and 7 cents are rounded down to the nearest 5 cents<br/>
                    • Amounts ending in 8 cents and 9 cents are rounded up to the nearest 10 cents<br/>
                    • Amounts ending in 0 cent and 5 cents remain unchanged.<br/>
                    Our rounding approach may not be adopted by third party service providers operating within our store environment.<br/>
                    Please contact with those providers directly if you have any questions about their rounding policies related to the elimination of the penny.<br/><br/>

                    Electronic transactions such as debit and credit cards don’t need to be rounded, and will not be impacted.<br/>

                    For more information, please visit the Government of Canada “Phasing out the Penny” site at www.actionplan.gc.ca/penny or call 1 800 O-Canada.</p>
            </div>
            <button class="collapsible">What payment methods do you accept ?</button>
            <div class="myContent">
                <p>We accept VISA, MasterCard, Interac, and Cash at our company office location as well as online.</p>
            </div>
        </div>
    </div>
</div>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>
@endsection

