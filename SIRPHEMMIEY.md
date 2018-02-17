1. Open XAMPP Control Panel, then Start the Apache and Mysql Panels (i.e the first two modules)
2. Go to your browser and type "localhost/phpmyadmin"
	 After loading successfully....
	 i. Click on "New" in the top left of the page...The brings out a field to enter your database name,
	 then you type "industry" as your database name.
	 ii. After DB is created, click on it (i.e the newly created DB, industry). In the tab, click on Import -> then "choose file". Note: What you are importing is the industry database that i have attached to the folder, named "industry.sql". After locating and choosing the .sql file (industry database), scroll down and click "Go". After that, all things will go well. (i.e you will see something like "so so so tables were imported succesfully").
3. Go to your hard drive (C:\) and find "Xampp". Inside the folder, locate "htdocs". Now, "htdocs" is the location where you will copy the industry folder that you have extracted. Note: Please take note of the folder name because this is what the browser will use in the identification of while folder exactly to look into. So, in that case i'll advice you leave the folder name as "industry" just as i have named it. 
4. Go inside the "industry" folder. As in industry->app->config. Inside config folder, open "database.php" file. Where you see "Password => Algorithm212...", change is to "password => '' ", meaning that it should be empty.
5. Go to your browser and type "localhost/industry".
6. A login page will appear, it's not configured yet, just click the "login" button and it'll lead yo =u to the main application where you can browse through.

FEATURES
1. You can go to any industry from within the application (Apart from Telecommunication industry which is yet to be implemented).
2. In the landing page you'll see the three industries, you can click them and explore.
	i. For instance, in the FMCG page (that is, when clicked), you'll see a dropdown select button where you can select the companies name. After selecting the company name, there would be an asynchronous request, after the request then you'll see the section of products under the company. Try to click on the buttons, then you'll see that options are popped out when clicked in an interactive manner. What comes out when the buttons are clicked are the sub products.
2. You can also locate a product from the sidebar and you can see how many companies produces or manufactures them. After you click on any of the company name, you'll be redirected to the section where you have clicked and needs to be updated.
3. In the redirected page, you will see that there are select tags with a number of options. The options are the products that the company manufactures. You will likewise see an icon, when you click on it, it pops out a field where you can add the name of the new product that you want to add. A notification pops out indicating that you have successfully added an option. Then when you check the select list, you'll see that the new option has been added and you can select it (l.e you can select it so as to be saved to the database.)
4. Click the update button, a confirm dialog pops up, you can just follow what it says. It's interactive and simple.   
5. The LAST THING that's in making (view) is where they will click any of the products popped out by the buttons in the view side, and then it will fetch the products description, image (if any) and any other additional information.
6. One thing that i wish to add is when the click the button or perhaps hover on the arrow shaped button, there'd be an animation that triggers different types of events