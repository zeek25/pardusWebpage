# Introduction

This project is meant as practice for myself and hopefully results in a useful tool to be used by users at [Pardus](https://www.pardus.at). This tool will support the planning of ships from the Pardus browser game, with a possibility of more features being added. This project is incomplete and will be updated when significant changes are made.

## Ship Selection
A php script makes a database query to populate a drop down menu with all currently available ships. <br />

![alt text](READMEImages/select.png?raw=true) <br />
![alt text](READMEImages/dropDown.png?raw=true)<br />

When a ship is selected another database call is performed to retrieve all necessary info of the selected ship. That info is then displayed on screen along with an image of the ship. In the "Ship Equipment" section drop down menus are added (or removed) for Guns and Missiles (Equal to the guns and missiles the current ship has). <br />

![alt text](READMEImages/shipSelected.png?raw=true) <br />

### Next Planned Changes
My next update will be to format the image and ship info. As well as populate the dropdown menus with the relevant weapons as well as add the images of the weapons.