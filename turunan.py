from flask import Flask
from flask import request
import re

# -*- coding: utf-8 -*-
"""
Created on Thu Apr 16 11:47:20 2020

@author: FAWWAZ ZAINI
"""

import re


def calculate(expression):
    if type(expression) is str:
        terms = exSplit(expression)
        # u = exSplit(expression)
        # terms = u[0::2]
    else:
        terms = [expression]
    r = ''
    oterms = terms
    while len(terms) > 0:
        i = terms.pop(0)
        if i == '+':
            r += i
        elif i == '-':
            r += i
        elif i in trigoperations:
            # l = terms.index(')')
            l = len(terms) - 1 - terms[::-1].index(')')
            s = i
            for x in range(0, l):
                s += terms.pop(0)
            r += chainrule(s)
        elif i == ')':
            pass
        elif i == '(':
            term = '('
            term += ''.join(terms)
            # l = terms.index(')') + 1
            # s = ''
            # if len(terms) >= l + 1:
            #     if '^' in str(terms[-1:]):
            #         l += 1
            # for x in range(1, l + 1):
            #     s += terms.pop(0)
            r += chainrule(term)
            ind = matchindex(term)
            nterms = term[ind:]
            terms = exSplit(nterms)[2:]
        else:
            r += derivative(i)
    return ''.join(r)


def exSplit(ex):
    delimiters = '+', '-', '*', '/', '(', ')'
    regex_pattern = '|'.join(map(re.escape, delimiters))
    iterms = re.split(regex_pattern, ex)
    operations = re.findall(regex_pattern, ex)
    split_ex = [None] * (len(operations) + len(iterms))
    split_ex[::2] = iterms
    split_ex[1::2] = operations
    split_ex = [x for x in split_ex if x]
    print('split_ex: ', split_ex)
    return split_ex


def derivative(term):
    print()
    print('Running derivative()')
    if 'x^' in term:
        coef = int(term.split('x^')[0])
        exp = int(term.split('x^')[1])
        print('')
        print('term: ', term)
        print('coef: ', coef)
        print('exp: ', exp)
        newcoef = coef * exp
        newexp = exp - 1
        if exp == 2:
            newterm = str(newcoef) + 'x'
        else:
            newterm = str(newcoef) + 'x^' + str(newexp)
        return str(newterm)
    elif 'x' in term:
        coef = int(term.split('x')[0])
        newterm = coef
        return str(newterm)
    else:
        print('term: ', term)
        return '0'


def matchindex(term):
    c = -1
    level = 0
    while True:
        c += 1
        if str(term[c]) == ")" and level == 1:
            return c
        elif str(term[c]) == "(":
            level += 1
        elif str(term[c]) == ")" and level > 1:
            level -= 1
        else:
            pass


def chainrule(term):
    print()
    print('Running chainrule()')
    print('term: ', term)
    termsin = trigoperations
    termsout = ['cos(x)', '(-sin(x))', 'sec(x)^2', 'sec(x)*tan(x)', '(-csc(x)*cot(x))', 'csc(x)^2']
    if term[:3] in termsin:
        outer = term.split('(')[0]
        inner = term.split('(')[1].split(')')[
            0]  # TODO: Make "inner" respect parentheses (especially for trig functions)
        print('inner: ', inner)
        if outer in termsin:
            print('termout: ', termsout[termsin.index(outer)])
            newterm = termsout[termsin.index(outer)].replace('x', inner)
            newterm += '*(' + ''.join(calculate(inner)) + ')'
            return newterm
    elif '(' == term[0]:
        # TODO: Add the ability to interpret parentheses not raised to a power, which most likely requires quotient rule functionality
        pindex = matchindex(term) - 1
        term = term[1:]
        t = [str(term[:pindex]), str(term[pindex + 2:])]
        # t = term.rsplit(')^', 1) # TODO: Separate at matching parenthesis by finding the nth ")" after n "("
        e = t[1]
        es = exSplit(e)
        del t[1]
        t += es[:1]
        newterm = str(int(t[1])) + '*(' + str(t[0]) + ')'
        if not int(t[1]) - 1 == 1:
            newterm += '^' + str(int(t[1]) - 1)
        newterm += '+' + calculate(t[0])
        return newterm


trigoperations = ['sin', 'cos', 'tan', 'sec', 'csc', 'cot']
inputs = ['3x^5+7x^4-5x^3+2x^2+8x-6', 'sec(3x^3+5x^2)', 'cos(3x^3+5x^2)+cot(3x^3+5x^2)-9x^2+10x', '(5x^3+7x^2)^4',
          '(5x^3+7x^2)^4+(25x^16-34x^7+2)^2', '(5x^3+7x^2+(2x^5+3x^3)^7)^4',
          '(5x^3+7x^2)^4+9x^6-(23x^93+54x^31-4x^342543)^254']
# inputs = ['(5x^3+7x^2)^4+9x^6-(23x^93+54x^31-4x^342543)^254']
inputs = ['3x^5+7x^4-5x^3+2x^2+8x-6', 'cos(3x^3+5x^2)+cot(3x^3+5x^2)-9x^2+10x', '(5x^3+7x^2+(2x^5+3x^3)^7)^4']
outputs = []

for i in range(0, inputs.__len__()):  # Compute from a preset list of inputs (for debugging purposes)
    outputs.append(calculate(str(inputs[i])))
print('')
print('Outputs')
for i in range(0, outputs.__len__()):
    print('')
    print('input:  ', inputs[i])
    print('output: ', outputs[i])

# fin = input('Equation to Compute: ')  # Compute from an input expression
# print('Derivative form:', calculate(str(fin)))