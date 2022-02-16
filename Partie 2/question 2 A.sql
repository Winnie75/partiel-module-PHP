-- Creates the login Bob l'éponge with password 'AZERTYUIOP'.  
CREATE LOGIN Bob l eponge   
    WITH PASSWORD = 'AZERTYUIOP';  
GO  
-- Creates a database user for the login created above.  
CREATE USER Bob l eponge FOR LOGIN Bob l eponge;  
GO
-- Creates the login Patrick with password '123456789'.  
CREATE LOGIN Patrick  
    WITH PASSWORD = '123456789';  
GO  

-- Creates a database user for the login created above.  
CREATE USER Patrick FOR LOGIN Patrick;  
GO
