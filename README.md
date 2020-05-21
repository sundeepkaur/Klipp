# Klipp
### Start Saving ###


Link - [https://klippelite.000webhostapp.com/home](https://klippelite.000webhostapp.com/home)

Hosting Platform - [https://www.000webhost.com/](https://www.000webhost.com/)




### Project Description ###

This idea is inspired by “Flipp” app. Flipp is an application that brings latest flyers and deals from local stores which helps shoppers save money. 

We plan to create a website which helps shoppers at every step starting from creating a list to checkout and everything in between. Our main goal is to let the shoppers know the net cost of their shopping at their nearest store before they start, taking into consideration cost of travel, time taken and how busy the store is. 

### Targeted audience and objective:

Targeted audience – Primary household shoppers
Objective – Empower shoppers to make informed shopping decisions saving them time and money every week. With this website shoppers can access shopping content like best prices, multi-discounts offered by their nearest store based on their physical location and calculating the net cost of their shopping. In addition to this, the website also informs the shoppers of the travel time and cost of travel depending on their mode of commute. The website aims to inform the shopper of the total expenditure of their shopping. 

### List of features:
* Home page – Contains links to every other page in the website with a brief description of each.
* About- Details about what the website aims at and everything it has to offer.
* Login/User account – User account login to view shopping history, save shopping list etc. 
* Feature to get shoppers current location or add any other location to check stores near with best prices. They can also add their mode of commute to calculate total cost of their shopping. 
* Make your shopping list – This enables shoppers to build a shopping list to check best prices and weekly deals. It also contains a column for miscellaneous cost and filters like lowest price and nearest. It is not necessary shoppers need to login to use this feature.
* Read weakly flyers –  Once the shopper has made the shopping list, it redirects to the suggested stores according to the filters chosen.
* How to use it? (Video) – It is a walk through on how to use the website
* Clip your flyers – Space where shoppers can clip their flyers manually or is automatically clipped depending on the shopping list. 
* Save shopping lists – Shoppers can save shopping lists for later, can add favourite items and set notifications to get an alert if the item is on sale.
* Contact us – Page giving info about contacting the web app builders.
* Support – Page dedicated to FAQs

### Login Credentials for Public Interface
Email - husain@gmail.com
Password - abcde12345


### About 000webhost
000webhost is one of the very few web hosts which give you the ability to host your website while paying nothing. ... 000webhost is genuinely a free web hosting and provides many services for free too

### Features in Detail


#### Login
- Public Interface
The user is authenticated by is email address and password. If the user is found in the database, it is forwarded to another url else it stays on the same home page. On successful authentication, user session is created

### Signup
In sign up, we take first name, last name, email, password and phone number to store user details. The user can login with the credentials to access the system.

### Logout
When user is deleted, activity is recorded in the database and the session is cleared.

### Location
When user acccess the location page, we show the user his current location and 5 nearest stores near to its location where he can access the items. The page also displays the store names down below.

The snippet of the code is:
```
navigator.geolocation.getCurrentPosition(function (position) {
    var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
    };
}
```
### Shopping List
This page is to let users browse items, view related flyers, save those flyers for furture reference, calculate the total cost for all the items. The page uses sessions to save user data. This page also consists of a side navigation bar which helps users browse items belonging to a particular category. 

### Search Flyers
This page enables users to browse items based on their search query. The page uses sessions to render the flyers. The flyers are dynamically generated from the database. 

#### Favourites
When the user selects the item as favourite item, it starts displaying in favourite section.

#### About
The primary purpose of an about us page is to inform the reader about the store and its operations.

#### Video
This page displays a video which gives overview about the store and all its products

Sections Developed By Sundeep:
* Shopping List, Search Flyer, Browse Flyer
* Location, Favourites, Signup, Signin, Log Out, Website Deployment
* Client Login, Client interface - Product add : Product delete : Product Modify , Contact Us, FAQ
* About us, how to use

 ### Database Structure:
 
 User :
* ID 
* Name
* Password
* Email
* Address1
* Address2
* Pincode
* New_password (Used in case when user request for new password, until user logins with it)
* Mobile
* Phone
* Created_at (Signifies when user was created)
* Is_deleted

 UserSessionActivity:
* ID
* User
* Login_time(Date time)
* Logout_time(Date time)

Store:
* ID
* Name
* Address1
* Address2
* Latitude
* Longitude
* Pincode
* Is_deleted

Product:
* ID
* Name
* Category
* Sub- category
* Seasonal (Boolean)
* Price
* BestPrice (Used for best price feature else 0 by default) -- delete
* Nearest_Pickup (Specifies nearest Location/Warehouse/Store for pickup) – Many to Many Field – Store
* Is_deleted

Flyers:
* ID
* FromDate
* ToDate
* Week – (Specifies the week)
* Attachment (PDF or image)
* Is_deleted

UserShoppingList:
* ID
* Product(Many to Many)
* Purchased
* Refund
* Flyers (If list created from flyers) Many to Many Field
* MiscellaneousCost
* Is_deleted

Deals:
* ID
* Product(Many to Many)
* Price
* Comments (Same as ‘Terms and Condition’)
* ValidFrom (Datetime)
* ValidTo (Datetime)
* Attachment (pdf or image) -- StoreID
* Is_deleted  


UserFavouriteItems:
* ID – user_id
* Product 
* Is_deleted


UserProductAlert:
* ID
* User
* Product
* Active
* Is_deleted

Geolocation Google Apis:
* Latitutde
* Longitiude
* Place ID

