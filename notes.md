# Database notes
## What Rob said
Here's the details of what we need with regards to the database systems for the general election. So firstly the data is available here http://www.electoralcommission.org.uk/our-work/our-research/electoral-data just go down to the general election in 2015 and then download the results file.

We then need you to write a mysql database which stores the relevant information in and can be easily added to with 2017 results so will need a field of which year the data is from probably.

Can you firstly write a webpage that allows 2017 data to be added in easily please and then also we need php functions writing to do the following:

For given constituency and party return smallest winning margin in order for 2015 and who won it in 2017. Can you return the lowest 30 results please and if there is no 2017 result yet available for the constituency just return null

For given constituency and party return where they didn’t win but smallest percentage difference in votes between first and them and who won it in 2017. Again 30 results please and null if 2017 result not input yet

For given constituency and year, return turnout percentage, percentage of vote share for each party, change in vote share (if year is 2017 then this value will need to be calculated before being put into the json string), winning party. If year is 2017 then return if constituency was held or won from another party in which case who was it won from

For given party and option of gain or loss return all constituencies that they have gained or lost in 2017

The system will work by making an Ajax request to the functions that you write and then we need you to return the data as a json string.

If theres any problems with any of that then let me know or if you don't understand any part of it then please ask cause this needs to work perfectly and so therefore please test the hell out of it with test 2017 data as well. Need it doing by the 2nd June if possible please.

## Notes
Constituency data could have changed! We don't know the max. no of voters, so can't calculate the turnout


### Data input
We take a single vote result:
 - Forename
 - Surname
 - Constituency
 - Party name
 - Party code
 - Number of votes


## The plan
 1. Create MySQL databases for relevant fields x
 2. Fill databases with data from CSV files x
 3. Write php link to databases
 4. Write functions to query relevant data for rob's request
 5. Write functions to return json
 6. Write a nice web frontend!

## Tables
# Candidate

Forename,
Surname,
Description on ballot paper,
Constituency Name,
PANO,
Votes,
Share (%),
Change,
,
Incumbent?, //"MP" indicates previously a member of parliament
,
Constituency ID ,
Region ID,
County ,
Region ,
Country ,
Constituency type,
Party name identifier,
Party abbreviation
