"""
**Tax Calculator** - 
Calculates the tax for a product with given product price and tax rate.
"""

class Tax():

    def total_cost(price, tax):
        return int(price) + (int(price) * float(tax)/100)

    def main():
        price = raw_input('Enter the price of an item: $')
        tax = raw_input('Enter the tax rate(%): ')
        print ("The total cost is %.2f." % total_cost(price,tax))
    
    if __name__ == '__main__':
        main()