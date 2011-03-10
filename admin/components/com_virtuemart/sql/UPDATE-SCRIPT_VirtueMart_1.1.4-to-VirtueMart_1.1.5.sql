#############################################
# SQL update script for upgrading 
# from VirtueMart Version <= 1.1.4 to VirtueMart 1.1.5
#
#############################################

# Add new PayPal API payment method
INSERT INTO `#__{vm}_payment_method` VALUES( 4, 1, 'PayPal (new API)', 'ps_paypal_api', 5, '0.00', 0, '0.00', '0.00', 0, 'PP_API', 'P', 0, 'N', '', '', '')
